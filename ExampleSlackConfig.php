<?php

class ExampleSlackConfig {

        public static array $config = [

            'slack-url' =>'',

          

            'icon'      =>':weary:'

        ];


    public static function getConfig():Array
    {

        return self::$config;

    }

}