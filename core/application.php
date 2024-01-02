<?php


namespace core ;


use models\User;
use core\router\Router;
use core\errors\exceptions\RouterException;

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

            //throw new RouterException("Error Processing Request", 1);
            

            $r->route();

        } catch (RouterException $th) {
           
            $th->handle();

        }
    }

}