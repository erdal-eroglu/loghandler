<?php

namespace LogHandler\Classes\Events\Slack;

use LogHandler\Classes\IConfig;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/

class Config implements IConfig
{

    /*
    *
    *@property protected static array $conf
    *
    *for configuration data 
    *
    */
    public  array $conf = [

                                'slack-url' =>'',

                                'icon'      =>':ghost:'

                            ];

    public function __construct(Array $array)
    {

        foreach($array as $key=>$val)
        {

            $this->conf[$key] = $val;

        }

        return $this;

    }
    
    
    public function getAllConfig():Array
    {

        return $this->conf;

    }

   /*
    * 
    * Runtime da Konfigürasyon Değiştirme ve Eklenmesini Sağlayan Metod
    *
    * @return array
    * 
    * @param string $configKey
    * 
    * @param string $configVal
    */
    public function setConfig(String $configKey,String $configVal)
    {
        
        return self::$conf[$configKey]=$configVal;
        
    }  

}
