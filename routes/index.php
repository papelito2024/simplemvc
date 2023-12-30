<?php



use core\router\Route;



$route = new Route;


$route->get("/",function($req,$res){
    
    echo "asasd";
});



return $route;


