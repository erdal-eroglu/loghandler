<?php
namespace LogHandler\Classes\Events\Slack;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/

use PHPMailer\PHPMailer\Exception;

use LogHandler\Classes\Events\IEvent;

use LogHandler\Classes\Events\Slack\Config;

use LogHandler\Classes\MessageMaker;

class SlackPusher extends Config implements IEvent  {

    public  function set(Array $message):IEvent{

        $this->message = $message;

        return $this;

    }

    public  function run():Array{

        $config = $this->getAllConfig();

        $ret     = [];

        try {

            $message            = MessageMaker::make($this->message);

            $data               = "payload=" . json_encode(
                                
                                                    [
        
                                                        "text"          =>  $message,

                                                        "icon_emoji"    =>  $config['icon']

                                                    ]

                                                );

            
            $ch = curl_init($config['slack-url']);

            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            curl_exec($ch);

            curl_close($ch);

            $ret['status']   = true;

            $ret['message']  = 'Slack Push Succesfully';

        } catch (Exception $e) {
            
            $ret['status']   = false;

            $ret['message']  = "Message could not be push. Slack Error: {".$e->getMessage()."}";

        }

        return $ret;

    }

}