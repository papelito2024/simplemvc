<?php



use core\router\Route;
defined("ROOT_PATH");


$route = new Route;


$route->get("/",function($req,$res){
    
        echo ROOT_PATH;
   $res->send("index.html");
});



return $route;


