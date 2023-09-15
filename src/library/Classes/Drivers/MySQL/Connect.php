<?php

namespace LogHandler\Classes\Drivers\MySQL;
use PDO;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/


 class Connect extends Config{

    protected $dbh;

    public function connect():PDO
    {

        $conf   = $this->getAllConfig();

        $this->dbh    =  new PDO('mysql:host='.$conf['db_host'].';dbname='.$conf['db_name'], $conf['db_user'], $conf['db_password']);

        return $this->dbh;

    }
    
 }