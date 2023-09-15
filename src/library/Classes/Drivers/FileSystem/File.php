<?php

namespace LogHandler\Classes\Drivers\FileSystem;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/


 class File extends Config{


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

    public function create():Array{

        if($this->lastFile['fileName']==""){

            $this->fileName="1".".".self::$confArr['file_extension'];

            touch(self::$confArr['storage_path']."/".$this->fileName);

        }

        return array();

    }

    public function reCreate():Array
    {



        if(Control::fileExceedControl($this->lastFile)===false ){

            $this->fileName = (int) substr($this->fileName, 0, strrpos($this->fileName, "."));

            $this->fileName++;

            touch(self::$confArr['storage_path']."/".$this->fileName.self::$confArr['file_extension']);

        }

        return array();

    }
    

 }