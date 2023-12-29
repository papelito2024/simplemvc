<?php


namespace core ;

use core\Autoloader;


class Application{

    /*
        run the entire application 
        from here    
    */
    public static function run(){

        
        Autoloader::register();
    }

}