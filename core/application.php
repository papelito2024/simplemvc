<?php


namespace core ;

use core\Autoloader;
use models\User;
use core\router\Router;

class Application{

    /*
        run the entire application 
        from here    
    */
    public static function run(){

        //$storange = new Storange("database");
        try {
            //code...
            
            $u = new User("user");
    

            $r = new Router;

            $r->route();

        } catch (\Throwable $th) {
            echo $th->getMessage().$th->getLine();
            exit;
        }
    }

}