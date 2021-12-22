<?php
include('smtp/PHPMailerAutoload.php');
require_once("conn.php");

$email = mysqli_real_escape_string($db, $_POST['username']);
$pswd = mysqli_real_escape_string($db, $_POST['pswd']);

$hash = password_hash($pswd, PASSWORD_DEFAULT);

$html = file_get_contents('contents2.html');
$patterns = array();
$patterns[0] = '/emailid/';
$replacements = array();
$replacements[0] = $email;

$output = preg_replace($patterns, $replacements, $html);

$usernameq = mysqli_query($db, "select username from tbl_register where username='$email'");
$row = mysqli_num_rows($usernameq);
if ($row >= 1) {
    echo 0;
} else {
    $insertq = mysqli_query($db, "insert into tbl_register set username='$email',pswd='$hash'") or die("query Error");
    if ($insertq == true) {
        smtp_mailer($email, 'Residence Association Details Form', $output);
    }
}


function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    // $mail->SMTPDebug  = 3;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username = "brocoder787@gmail.com";
    $mail->Password = "coderbro787";
    $mail->SetFrom("brocoder787@gmail.com");
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
        $mail->ErrorInfo;
    } else {
        echo 1;
    }
}
