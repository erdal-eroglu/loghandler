<?php

namespace  LogHandler\Classes\Drivers\FileSystem;

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
            *  [(int) file_exceed_byte] 
            *
            * Yeni Dosyanın Oluşturulması 
            * İçin Eski Dosyanın Boyutu Kaç BYTE a Ulaşmalı
            *
            */

            'file_exceed_byte'  => 10485760, //10MB

            /*
            * [(String) storage_path]
            *
            * Log Dosyalarınn Oluşturulacağı Path
            *
            */

            'file_extension'      => '-handler.log',                        

            /*
            * [(String) storage_path]
            *
            * Log Dosyalarınn Oluşturulacağı Path
            *
            */

            'storage_path'      => 'lh-storage',

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