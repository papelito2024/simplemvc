<?php

namespace core\views;

defined("ROOT_PATH");
defined("APP_NAME");

class ViewsEngine{
    const VIEWS_PATH = ROOT_PATH.DIRECTORY_SEPARATOR.
    APP_NAME.DIRECTORY_SEPARATOR.
    "public".DIRECTORY_SEPARATOR."views".DIRECTORY_SEPARATOR;
    
    public static  function render($view,$data){

        if(!file_exists(self::VIEWS_PATH.$view)) 
        throw new \Exception("the ".self::VIEWS_PATH.$view." view file doenst exists", 1);
        
        
        ob_start();

        $data;

        include SELF::VIEWS_PATH.$view;

        
        $html = ob_get_contents();


        ob_get_clean();


        
        echo $html;

    }
}