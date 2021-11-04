<?php

namespace LogHandler\Classes\Drivers;


/*
 *
 * Erdal EROĞLU <erdal@istanbul-soft.com.tr>
 *
 * 02-09-2020
 *
 */

interface IDriver{

    /*
    *
    * @method public append 
    * 
    * @param String $message
    *
    */
    public function append(Array $message):Array;


}