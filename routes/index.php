<?php



use core\router\Route;



$route = new Route;


$route->get("/",midleware(),midleware(),midleware(),handler());




