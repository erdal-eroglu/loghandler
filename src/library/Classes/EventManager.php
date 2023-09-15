<?php

namespace LogHandler\Classes;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/



use LogHandler\Classes\Events\IEvent;

class EventManager  {

    public  array $msg;

    public function event(IEvent $obj):EventManager{

            $obj->set($this->msg);

            $obj->run();

            return $this;

    }  

    public function setMessage(Array $message):EventManager{

            $this->msg = $message;

            return $this;

    }     

}