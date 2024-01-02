<?php

namespace core\http\response;

use core\views\ViewsEngine;

class Response{

    
    private $contentType;

    const CONTENT_TYPES =array(
        "HTML"=>"text/html",
        "JSON"=>"application/json",

    );


    function __construct(){
        $this->contentType = "text/html";
    }
    
    public function send(){

        $params = func_get_args();

        switch ($this->contentType) {
            case self::CONTENT_TYPES["HTML"]:

                

                ViewsEngine::render($params[0],isset($params[1]) ? $params[1] : []);

                break;
            
            default:
                # code...
                break;
        }
    }
    
    public function getRequestMethod(){
        return $_SERVER["REQUEST_METHOD"];
    }

    public function getRequestUrl(){
        return substr($_SERVER["REQUEST_URI"],1);
    }

    public function url2array(){

        $r = explode("/",$this->getRequestUrl());
        array_shift($r);

        if(empty($r[0])) $r[0]="home";
        return $r;
    }
}