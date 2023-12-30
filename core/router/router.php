<?php

namespace core\router;

use core\router\Route;
use core\router\Matcher;
use core\http\request\Request;
use core\http\response\Response;


defined("ROOT_PATH");
defined("APP_NAME");
defined("ENVIROMENT");

class Router{



    public function route(){

        $routes =$this->getRoutes();

        //var_dump($routes);
        //match http request uri with routes
        $matcher = new Matcher();
        $req = new Request();
        $res = new Response();
    
        if(!$matchOb=$matcher->match($req,$routes)) 

        throw new \Exception("[ROUTER] not found", 1);
        
        //call handlers and middler wares 

        $middlewares = $matchOb->getMiddlewares();

        foreach ($middlewares as  $middleware) {
            
            call_user_func($middleware,$req,$res);
        }

        $handler=$matchOb->getHandler();
        call_user_func($handler,$req,$res);

    }
    

    /**
     * 
     * this methods takes all the files on the routes path and returns 
     * an array of routes 
     * 
     */
    private function getRoutes(){
        
        $routesPath = ROOT_PATH.DIRECTORY_SEPARATOR.strtolower(APP_NAME).DIRECTORY_SEPARATOR."routes".DIRECTORY_SEPARATOR;

        if(!is_dir($routesPath)) throw new \Exception("[ROUTER] routes dir doesnt exists", 1);
        
        $files=scandir($routesPath);
        
        $routes=[];


        foreach ($files as $file) {
            if($file!= "." && $file != ".."){
                $ob=require($routesPath.$file);
               
                if($ob instanceof Route) $routes[explode(".",$file)[0]]=$ob;
            }    
        }

        return $routes;
    }
}