<?php

namespace LogHandler\Classes\Drivers\FileSystem;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/


 use LogHandler\Classes\Drivers\IDriver;


 class Driver extends File implements IDriver{

    public Array  $lastFile;

    public String $fileName;

    public function init():IDriver
    {

        $errorFolderPath = rtrim(self::$confArr['storage_path']);

        \LogHandler\Traits\FolderInit::createPath($errorFolderPath);

        $this->lastFile =Control::getLastFile();

        $this->fileName = basename($this->lastFile['fileName']);

        $this->create();

        $this->reCreate(); 

        return $this;

    }

    
    /*
    *
    * Method file Systeme Yazılmasını Sağlıyor
    *
    * @method public append
    *
    * @param String $message
    *
    * @return void
    *
    */

    public function append(Array $message):void{

        
        $file   = $message['file']??"NULL";

        $line   = $message['line']??"NULL";

        $error  = $message["error"]??"NULL";

        $code   = $message["code"]??"NULL";

        $line =date('Y-m-d H:i:s')." | File : $file | Line : $line | Message : $error | Code : $code \n \n";
        
        file_put_contents(self::$confArr['storage_path']."/".$this->fileName,$line,FILE_APPEND | LOCK_EX);

    }

 }