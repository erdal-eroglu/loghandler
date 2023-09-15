<?php

namespace LogHandler\Classes\Drivers;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/

interface IDriver{


        /*
    *
    * @method public append 
    * 
    * @param String $message
    *
    */
    public function init():IDriver;


    /*
    *
    * @method public append 
    * 
    * @param String $message
    *
    */
    public function append(Array $message):Void;


}