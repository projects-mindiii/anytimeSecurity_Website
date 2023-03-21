<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter PHPMailer Class
 *
 * This class enables SMTP email with PHPMailer
 *
 * @category    Libraries
 */

 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\SMTP;
 use PHPMailer\PHPMailer\Exception;

class Phpmailer_library
{
    public function __construct()
    {
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function send_mail($recipient="",$subject,$mailContent)
    {
        $mail = new PHPMailer(true);
       
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = getenv('MAIL_HOST');
        $mail->SMTPAuth = true;
        $mail->Username = getenv('MAIL_USERNAME');
        $mail->Password = getenv('MAIL_PASSWORD');
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = getenv('MAIL_PORT');
        
        $mail->setFrom(getenv('FROM_MAIL'), getenv('FROM_NAME'));
        //$mail->addReplyTo(getenv('FROM_MAIL'), getenv('FROM_NAME'));
        
        // Add a recipient
        if($recipient){
            $mail->addAddress($recipient);
        }
        else{
            $mail->addAddress(getenv('TO_MAIL'));
        }
        
        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        $mail->addBCC(getenv('FROM_MAIL'));
        
        // Email subject
        $mail->Subject = $subject;
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mail->Body = $mailContent;

        $res=$mail->send();
        
        // Send email
        // if(!$mail->send()){
        // 	$mail->SMTPDebug = 0;
        // 	print_r($mail->ErrorInfo);
        // 	echo 'Message could not be sent.';
        // 	echo 'Mailer Error: ' . $mail->ErrorInfo;
        // }else{
        // 	echo 'Message has been sent';
        // }

        return $res;

    }
}