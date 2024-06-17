<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = '2210631170107@student.unsika.ac.id';    //Sender's email
        $mail->Password   = 'xgktjutazaqooqrm';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        
        $mail->SMTPDebug = 2;
        $mail->Debugoutput = 'html';

        //Recipients
        $mail->setFrom($_POST["email"], $_POST["name"]);
        $mail->addAddress('yavt5610@gmail.com');                    //Email recipient
        $mail->addReplyTo($_POST["email"], $_POST["name"]);

        //Content
        $mail->isHTML(true);
        $mail->Subject = $_POST["subject"];
        $mail->Body    = $_POST["message"];

        // Send email
        $mail->send();
        echo "<script>alert('Message was sent successfully!'); document.location.href = 'index.php';</script>";
    } catch (Exception $e) {
        echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
}
?>