<?php

namespace LogHandler\Traits;

trait FolderInit{
    
    public static function createPath(String $path):String{
        
        $path = rtrim($path,"/");
        
        $pathExplode=explode("/",$path);
        
        $allPath="";
        
        foreach($pathExplode as $path){
            
            $path = rtrim($path,"/");
            
            $allPath.=$path."/";
            
            if(!is_dir($allPath))
                mkdir($allPath);
           
        }

        return $allPath;
        
    }
    
    
}