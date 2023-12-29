<?php


namespace core;

defined("ROOT_PATH");
defined("APP_NAME");
defined("ENVIROMENT");


class Autoloader{
    
    public static $FILE_PATH;


    /**
     *  require all  of the classes files
     */

    public static function register(){


        spl_autoload_register(function($class){

            
           //echo $$FILE_PATH;
           if(!self::checkClassPath($class)){

               throw new \Exception("[FILE] the file ".
               self::$FILE_PATH.
               " doesnt exists bitch", 1);
                exit;
           } 


           require_once(self::$FILE_PATH);
            
           
        });
    }

    /**
     * check if the file classs exists 
     */

    static function checkClassPath($class){
        self::$FILE_PATH = ROOT_PATH.DIRECTORY_SEPARATOR;
          //  echo "Asdasd";
        if(ENVIROMENT=="DEV") self::$FILE_PATH=self::$FILE_PATH.strtolower(APP_NAME).DIRECTORY_SEPARATOR;              
            
        self::$FILE_PATH=self::$FILE_PATH.$class.".php";
            
        
        if(file_exists(self::$FILE_PATH)) return true;


        return false;
    }
    
}
