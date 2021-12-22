<?php
include('smtp/PHPMailerAutoload.php');
$html = file_get_contents('contents.html');

smtp_mailer('brocoder787@gmail.com', 'Test mail', $html);

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
        echo "Mail sent successfully";
    }
}
