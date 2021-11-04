<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

use LogHandler\Classes\LogManager;

use LogHandler\Classes\Drivers\FileSystem\Driver;

$Driver = new Driver();

$LogManager = new LogManager($Driver);

$message=[

    "file"=>"Dosya.php",

    "line"=>"25",

    "error"=>"Hata Mesajı",

    "code"=>"1005"

];

$LogManager->write($message)->event('mail-send');