<?php

namespace  LogHandler\Classes\Drivers\FileSystem;

/*
 *
 * Erdal EROĞLU <erdal@istanbul-soft.com.tr>
 *
 * 02-09-2020
 *
 */

 class Config{

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
            * Log Dosyalarınn Oluşturulacağı Uzantı
            *
            */

            'file_extension'      => '.log',                        

            /*
            * [(String) storage_path]
            *
            * Log Dosyalarınn Oluşturulacağı Path
            *
            */

            'storage_path'      => '/var/www/html/LogHandler/Logs',

    ]; 
     
     /*
      * 
      * Konfigürasyonların Hepsini veren metod
      *
      * @return Array
      * 
      *
      */
     protected function getAllConfig():Array{
         
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