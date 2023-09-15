<?php

namespace LogHandler\Classes;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/


use LogHandler\Classes\Drivers\IDriver;
use LogHandler\Classes\EventManager;

class LogManager extends EventManager {
    
    private  IDriver $driver;

    public function __construct(IDriver $driver){

        $this->driver = $driver;

    }  

    public function write(Array $message):LogManager{
     
        $this->driver->init()->append($message);

        $this->msg  = $message;
        
        return $this;

    }

}