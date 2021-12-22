<?php
include('smtp/PHPMailerAutoload.php');
require_once("conn.php");


$residence_name = mysqli_real_escape_string($db, $_POST['residence_name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$residence_association_details_form = mysqli_real_escape_string($db, $_POST['residence_association_details_form']);

$html = file_get_contents('contents.html');

$patterns = array();
$patterns[0] = '/residencename/';
$patterns[1] = '/emailid/';
$patterns[2] = '/phone/';
$replacements = array();
$replacements[0] = $residence_name;
$replacements[1] = $email;
$replacements[2] = $phone;
$output = preg_replace($patterns, $replacements, $html);

// echo $output;



$created_date = date_default_timezone_set("Asia/Kolkata");
$created_date = date('Y-m-d H:i:s');

$insertq = mysqli_query($db, "insert into tbl_apply_now set residence_name='$residence_name',email='$email',phone='$phone',residence_association_details_form='$residence_association_details_form',created_date='$created_date'") or die(mysqli_error($db));
if ($insertq == true) {
    smtp_mailer($email, 'Residence Association Details Form', $output);
}

function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    // $mail->SMTPDebug  = 3;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    // $mail->Host = "smtp.gmail.com";
    $mail->Host = "dionysus.krystal.co.uk";
    // $mail->Port = 587;
    $mail->Port = 465;
    $mail->IsHTML(true);
    // $mail->CharSet = 'UTF-8';
    $mail->CharSet = 'iso-8859-1';
    // $mail->Username = "brocoder787@gmail.com";
    // $mail->Password = "coderbro787";
    $mail->Username = "ez@eitbiz.com";
    $mail->Password = "CeX@mDW9Ly5t";
    // $mail->SetFrom("brocoder787@gmail.com");
    $mail->SetFrom("ez@eitbiz.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->addStringAttachment(file_get_contents("files/RA_Information_Form.docx"), 'RA_Information_Form.docx');


    $mail->SMTPOptions = array('ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => false
    ));
    if (!$mail->Send()) {
        echo $mail->ErrorInfo;
    } else {
        echo 1;
    }
}
