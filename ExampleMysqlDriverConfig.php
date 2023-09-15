<?php

class ExampleMysqlDriverConfig {

 

    public static Array $conf=
    [

            /*
            *  [(int) db_host] 
            *
            * Yeni Dosyanın Oluşturulması 
            * İçin Eski Dosyanın Boyutu Kaç BYTE a Ulaşmalı
            *
            */

            'db_host'  => '172.28.1.4', 

            /*
            * [(String) db_name]
            *
            * Log Dosyalarınn Oluşturulacağı Path
            *
            */

            'db_name'      => 'holdingo',                                            

            /*
            * [(String) db_user]
            *
            * Log Dosyalarınn Oluşturulacağı Path
            *
            */            

            'db_user'      => 'root',


            /*
            * [(String) db_password]
            *
            * Log Dosyalarınn Oluşturulacağı Path
            *
            */

            'db_password'      => 'root1pass',   
            
                        /*
            * [(String) db_port]
            *
            * Log Dosyalarınn Oluşturulacağı Path
            *
            */

            'db_port'      => 3306,   

    ]; 



    public static function getConfig():Array
    {

        return self::$conf;

    }

}