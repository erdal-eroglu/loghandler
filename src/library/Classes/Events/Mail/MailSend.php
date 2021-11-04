<?php
namespace LogHandler\Classes\Events\Mail;

use LogHandler\Classes\Events\IEvent;

class MailSend implements IEvent{


    public  function set(Array $message):IEvent{

        return $this;

    }

    public  function run():Array{

        echo"Mail Gönderildi";

        return array();

    }


}