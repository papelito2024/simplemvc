<?php

namespace core\router;

use core\http\request\Request;


class Matcher{

    /**
     * 
     * this class is in changed of matcheing the current http reuqest uri
     * 
     * with the object route we want to call the handler of
     */

     
     public function match(Request $req, Array $routes){

        $requestUri = $req->url2array();
        
        $requesMethod = $req->getRequestMethod();

        $matchObejct=null;

        $matchFlag=false;


        foreach($routes as $file=>$route){

            $route=$route->getInstance();

          
            if($requesMethod != $route->getMethod()) continue;
            
            
            if(count($requestUri) != count($routeUri=$route->url2array())) continue;
            
           // var_dump($routeUri);
            $matchFlag = true;
            
            foreach ($routeUri as $key => $pattern) {
                # code...
               //echo $pattern;
                if( !preg_match("/$pattern/",$requestUri[$key])){
                    $matchFlag=false;
                    break;
                } 
            }
            
            if($matchFlag){
                $matchObejct = $route;
                break;
            };
        }

       // var_dump($matchObejct);

        return $matchObejct;
     }
}