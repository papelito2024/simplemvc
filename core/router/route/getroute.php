<?php

namespace core\router\route;


use core\router\route\HttpRoute;



class GetRoute extends HttpRoute{

    CONST HTTP_METHOD = "GET";

    function __construct($url,$middlewares,$handler)
    {   
       // var_dump($handler);
        parent::__construct($url,$handler,$middlewares,self::HTTP_METHOD);
    }


    
    
}