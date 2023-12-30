<?php

namespace core\router;

use core\router\route\GetRoute;

class Route {

    private $routeInstance;
    
    public function  get(){
        
        $args= func_get_args();

        $handler = array_pop($args);

        //var_dump($handler);

        $url = array_shift($args);
        //var_dump($handler);
        
        $this->routeInstance = new GetRoute($url,$args,$handler);

    }


    public function post(){

    }



    public function getInstance(){
        return $this->routeInstance;
    }
}