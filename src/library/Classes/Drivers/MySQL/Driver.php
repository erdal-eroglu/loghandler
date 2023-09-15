<?php

namespace LogHandler\Classes\Drivers\MySQL;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/


 use LogHandler\Classes\Drivers\IDriver;

 use LogHandler\Classes\Drivers\MySQL\Migrate;


 class Driver extends Connect implements IDriver{

    public Array  $lastFile;

    public String $fileName;

    public function init():IDriver
    {

        $Migrate = new Migrate();

        $Migrate->run($this->connect());

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

        $conf = $this->getAllConfig();

        $file   = $message['file']??"NULL";

        $line   = $message['line']??"NULL";

        $error  = $message["error"]??"NULL";

        $code   = $message["code"]??"NULL";

        $sqlCode = "INSERT INTO `".$conf['db_table']."` 
            
                                        (

                                            `file` ,  

                                            `line` , 

                                            `code` , 

                                            `message`  ,   

                                            #`events` ,

                                            `raw` ,  

                                            `date` 

                                        )
                                        VALUES(

                                            '{$file}',

                                            '{$line}',

                                            '{$code}',

                                            '".substr($this->dbh->quote($error), 1, -1)."',

                                            '".substr($this->dbh->quote(json_encode($message)), 1, -1)."',

                                            '".date('Y-m-d H:i:s')."'

                                        )
                                ";

        $this->dbh->query($sqlCode);



    }

 }