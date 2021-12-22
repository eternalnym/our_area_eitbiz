<?php
include('smtp/PHPMailerAutoload.php');

$html = file_get_contents('contents.html');
// $to = "brocoder787@gmail.com";

smtp_mailer('brocoder787@gmail.com', 'Test mail', $html);

function smtp_mailer($to, $subject, $msg)
{
    $mail = new PHPMailer();
    $mail->SMTPDebug  = 3;
    $mail->IsSMTP();
    $mail->SMTPAuth = false;
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
