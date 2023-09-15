<?php

namespace LogHandler\Classes\Drivers\FileSystem;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/



 class Control extends Config{

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