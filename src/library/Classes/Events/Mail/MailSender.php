<?php
namespace LogHandler\Classes\Events\Mail;


/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use LogHandler\Classes\Events\IEvent;
use LogHandler\Classes\Events\Mail\Config;
use LogHandler\Classes\MessageMaker;

class MailSender extends Config implements IEvent {

    public  function set(Array $message):IEvent{

        $this->message = $message;

        return $this;

    }

    public  function run():Array{

        $config = $this->getAllConfig();

        $result     = [];

        $mail       = new PHPMailer(false);

        try {

            $mail->isSMTP();                                            

            $mail->Host       = $config['mail-host'];               

            if($config['auth']){

                $mail->SMTPAuth   = true;                                  

                $mail->Username   = $config['user-name'];;              

                $mail->Password   = $config['mail-password'];           

                if($config['ssl'])
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
                         
            }

            $mail->Port       = $config['port'];                   

            $mail->setFrom($config['from-mail'], $config['from-name']);

            $mail->addAddress($config['send-mail'], $config['send-name']);     

            $mail->addCC($config['cc-mail']);

            $mail->addBCC($config['bcc-mail']);

            $mail->isHTML(true);                                 

            $mail->Subject = $config['mail-subject'];

            $mail->Body    = MessageMaker::make($this->message,true);

            $mail->AltBody = $mail->Body;

            $mail->send();

            $result['status']   = true;

            $result['message']  = 'Mail Send Succesfully';

        } catch (Exception $e) {
            
            $result['status']   = false;

            $result['message']  = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

        }

        return $result;

    }

}