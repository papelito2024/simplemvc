<?php

namespace core\router\route;


abstract class HttpRoute{
    private $url;
    private $handler; 
    private $middlewares;
    private $method;
    
    function __construct($url,$handler,$middlewares,$method){
       
        $this->setUrl($url);
        $this->handler = $handler;


        $this->middlewares = $middlewares;
        $this->method = $method;
    }
    
   // protected abstract function request();

   private function setUrl($url){

    if($url == "/") $this->url = "home";

    $this->url = str_starts_with($this->url,"/") 
        ? substr($url,1) : $this->url;
    
   }

     function getMethod(){
        return $this->method;
    }

    function getMiddlewares(){
        return $this->middlewares;
    }
    function getHandler(){

        //var_dump($this->handler);
        return $this->handler;
    }

     function getUrl(){

        return $this->url;
    }

 function url2array(){
        
        return explode("/",$this->url);
    }
}