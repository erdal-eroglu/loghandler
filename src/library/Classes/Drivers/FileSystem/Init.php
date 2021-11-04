<?php

namespace LogHandler\Classes\Drivers\FileSystem;

/*
 *
 * Erdal EROĞLU <erdal@istanbul-soft.com.tr>
 *
 * 02-09-2020
 *
 */


 class Init extends Config{

    /*
    public static function getMinFileSize():Array{

        $path = self::$confArr['storage_path'];

        $fileList = glob($path."/*".self::$confArr['file_extension']);

        $fileArr=array();

        foreach($fileList as $file){

            $fileArr[\filesize($file)] = $file;

        }

        ksort($fileArr,1);

        $fs = array_key_first($fileArr);

        $resultSet = 
        [
            
            'fileSize'=>$fs??0,
            
            'fileName'=>array_values($fileArr)[0]??""
            
        ];

        return $resultSet;
        
    }*/

    public static function getLastFile():array{

        $path = self::$confArr['storage_path'];

        $fileList = glob($path."/*".self::$confArr['file_extension']);

        $lastFile="";

        $lastFileTime = 0;

        foreach($fileList as $file){

            if($lastFileTime<filemtime($file)){

                $lastFileTime= filemtime($file);

                $lastFile = $file;

            }

        }

        $resultSet = 
        [
            
            'fileSize'=>($lastFile!=""?filesize($lastFile):0),
            
            'fileName'=>$lastFile??""
            
        ];

        return $resultSet;        

    }

    public static function fileExceedControl(Array  $file):bool{

        return $file['fileSize']<self::$confArr['file_exceed_byte'];
     
    }    

    public static function LogFileCreate(String  $file):Array{

        touch();

        $resultSet;

         
     
    }  


 }