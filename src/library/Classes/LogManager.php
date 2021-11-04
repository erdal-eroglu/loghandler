<?php

namespace LogHandler\Classes;

/*
 *
 * Erdal EROĞLU <erdal@istanbul-soft.com.tr>
 *
 * 01-09-2020
 *
 */

use LogHandler\Classes\Drivers\IDriver;
use LogHandler\Classes\EventList;

class LogManager {
    
    private static IDriver $driver;

    private static array $msg;

    public function __construct(IDriver $driver){

        self::$driver = $driver;

    }  

    public function write(Array $message):LogManager{

        self::$driver->append($message);

        self::$msg  = $message;
        
        return $this;
    }

    public function event(String $eventName):LogManager{

        if(EventList::$list[$eventName]){

            $obj = new EventList::$list[$eventName];

            $obj->set(self::$msg);

            $obj->run();

        }

        return $this;

    }  

}