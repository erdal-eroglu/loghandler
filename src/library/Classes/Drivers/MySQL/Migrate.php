<?php

namespace LogHandler\Classes\Drivers\MySQL;
use PDO;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/


 class Migrate{

    public function run($dbh)
    {

        $dbh->query("CREATE TABLE IF NOT EXISTS `lh_logs` 
                (

                    `id` int(11) NOT NULL auto_increment,   

                    `file` varchar(512)  NOT NULL, 

                    `line`  varchar(512) NOT NULL,  

                    `code` varchar(512)  NOT NULL, 

                    `message`  LONGTEXT NOT NULL,  

                    #`events` varchar(512) NOT NULL,

                    `raw` LONGTEXT NOT NULL,  

                    `date` DATETIME  NOT NULL, 

                    PRIMARY KEY  (`id`)
            
            );"
            
        );
        
        return array();

    }
    
 }