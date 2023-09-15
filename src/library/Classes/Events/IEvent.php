<?php
namespace LogHandler\Classes\Events;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/

use LogHandler\Classes\IConfig;

interface IEvent {

    public  function set(Array $message):IEvent;

    public  function run():Array;

}