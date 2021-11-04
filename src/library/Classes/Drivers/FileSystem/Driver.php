<?php

namespace LogHandler\Classes\Drivers\FileSystem;

/*
 *
 * Erdal EROĞLU <erdal@istanbul-soft.com.tr>
 *
 * 02-09-2020
 *
 */

 use LogHandler\Classes\Drivers\IDriver;

 class Driver extends Config implements IDriver{

    /*
    *
    * Method file Systeme Yazılmasını Sağlıyor
    *
    * @method public append
    *
    * @param String $message
    *
    * @return Array
    *
    */

    public function append(Array $message):Array{

        $errorFolderPath = rtrim(self::$confArr['storage_path']);

        \LogHandler\Traits\FolderInit::createPath($errorFolderPath);

        $lastFile =Init::getLastFile();

        $fileName = basename($lastFile['fileName']);

        if(Init::fileExceedControl($lastFile) && $lastFile['fileName']!=""){

            $file   = $message['file']??"NULL";

            $line   = $message['line']??"NULL";

            $error  = $message["error"]??"NULL";

            $code   = $message["code"]??"NULL";

            $line =date('Y-m-d H:i:s')." | File : $file | Line : $line | Message : $error | Code : $code \n \n";

            file_put_contents($lastFile['fileName'],$line,FILE_APPEND);

        }else{

            $fileName = (int) substr($fileName, 0, strrpos($fileName, "."));

            $fileName++;

            touch(self::$confArr['storage_path']."/".$fileName.self::$confArr['file_extension']);

        }

        return array();

    }

 }