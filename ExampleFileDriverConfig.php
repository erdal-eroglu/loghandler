<?php

class ExampleFileDriverConfig {

 

        public static array $config = [

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


    public static function getConfig():Array
    {

        return self::$config;

    }

}