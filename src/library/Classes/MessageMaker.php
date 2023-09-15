<?php

namespace LogHandler\Classes;

/**
*@Author-Name   : Erdal EROĞLU 
*@Author-Mail   : erdal.eroglu@gmail.com
*@Create-Date   : dd-mm-YYYY
**/

use LogHandler\Classes\EventManager;

class MessageMaker extends EventManager {
    
    public static function make(array $message,bool $html=false):String{
     
        $messageResult ="";

        foreach($message  as $key=>$val)
        {
            if(is_array($val))
            {

                $messageResult.=$val['label']." : ".$val['value']." | ".($html?" \n <br\> ":" \n ");

            }else
            {
                
                $messageResult.=$key." : ".$val." | ".($html?" \n <br\> ":" \n ");

            }

        }
        
        return $messageResult;

    }

    public static function makeLine(array $message):String{
     
        $messageResult ="";

        foreach($message  as $key=>$val)
        {

            if(is_array($val))
            {

                $messageResult.=$val['label']." : ".$val['value']." | ";
                
            }else
            {
                
                $messageResult.=$key." : ".$val." | ";

            }
            

        }
        
        return $messageResult;

    }
    
}