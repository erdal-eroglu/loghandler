<?php

namespace  LogHandler\Classes\Drivers\MySQL;

use LogHandler\Classes\IConfig;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/


 class Config implements IConfig{

    /*
     * 
     * Log Konfigürasyonları
     *
     * @$confArr Array
     * 
     */

    protected static Array $confArr=
    [

            /*
            *  
            *
            * Mysql host ip or domain
            *
            */

            'db_host'  => '172.28.1.4', //10MB

            /*
            *
            * DB for Logger
            *
            */

            'db_name'      => 'log_handler',                        

            /*
            * 
            *  Table Name 
            *
            */

            'db_table'      => 'lh_logs',                        

            /*
            *
            * Database User Name
            *
            */            

            'db_user'      => 'root',


            /*
            * 
            *  Database Password
            *
            */

            'db_password'      => 'root1pass',   
            
            /*
            * 
            * Mysql Port
            *
            */

            'db_port'      => 3306,   

    ]; 



    public function __construct(Array $array=array())
    {

        foreach($array as $key=>$val)
        {

            self::$confArr[$key] = $val;

        }

    }
     
     /*
      * 
      * Konfigürasyonların Hepsini veren metod
      *
      * @return Array
      * 
      *
      */
     public function getAllConfig():Array{
         
         return self::$confArr;
         
     }

     /*
      * 
      * Runtime da Konfigürasyon Değiştirme ve Eklenmesini Sağlayan Metod
      *
      * @return void
      * 
      * @param string $configKey
      * 
      * @param string $configVal
      */
      public function setConfig(String $configKey,String $configVal){
         
        return self::$confArr[$configKey]=$configVal;
        
    }     

 }