<?php

namespace core\http\response;


class Response{

    
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