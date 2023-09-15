<?php

ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);

require_once __DIR__ . '/vendor/autoload.php';

require_once 'ExampleMailConfig.php';

require_once 'ExampleSlackConfig.php';

require_once 'ExampleMysqlDriverConfig.php';

use LogHandler\Classes\LogManager;

use LogHandler\Classes\Drivers\FileSystem\Driver AS FileDriver;

use LogHandler\Classes\Drivers\MySQL\Driver as MySQLDriver;

use LogHandler\Classes\EventManager;

use LogHandler\Classes\Events\Mail\MailSender;

use LogHandler\Classes\Events\Slack\SlackPusher;

$FileDriver = new FileDriver();

$MySQLDriver = new MySQLDriver(ExampleMysqlDriverConfig::$conf);

$message=[

    'file' => __FILE__,

    'line' => __LINE__,

    "error"=>"xcxcxxc xc x Mesajı",

    "code"=>"55555",

    "comment"=>"null"

];

$LogManager     = new LogManager($MySQLDriver);

$SlackEvent     = new SlackPusher(ExampleSlackConfig::$config); 

$MailEvent      = new MailSender(ExampleMailConfig::$config); 

$EventManager   = new EventManager();

#$EventManager->setMessage($message)->event($MailEvent)->event($SlackEvent);

$LogManager->write($message)->event($MailEvent)->event($SlackEvent);