<?php

class ExampleMailConfig {

        public static array $config = [

                'mail-host'=>'smtp.gmail.com',

                'auth'=>true,

                'user-name'=>'',

                'mail-password'=>'',

                'ssl'=>true,

                'port'=>465,

                'from-mail'=>'',

                'from-name'=>'',

                'send-mail'=>'',

                'send-name'=>'',

                'cc-mail'=>'',

                'bcc-mail'=>'',

                'mail-subject'=>''

        ];


    public static function getConfig():Array
    {

        return self::$config;

    }

}