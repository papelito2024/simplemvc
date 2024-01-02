<?php

namespace core\errors\exceptions;

use core\errors\exceptions\ExceptionInterface;


class RouterException extends \Exception  {



    public function handle(){

        echo "soy handle";

     
         
    }
    
    
}