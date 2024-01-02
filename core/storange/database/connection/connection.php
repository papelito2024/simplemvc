<?php

namespace core\storange\database\connection;

use core\storange\database\connection\PDOConnection;

class Connection{
    

    /**
     * to avoide to create multiple connection objects
     * each ttime we instances a model the connection instances
     * is gonna be a global variable with a static declaration
     */
    private static $instance;

    function __construct(){

    }

    /**
     * this method takes wich type o database we want to instance 
     * and returns an instance of the connection 
     */

    static function connect($database){

        if(self::$instance) return self::$instance;
        
        switch ($database) {
            case 'pdo':
                $conn = new PDOConnection();
                self::$instance=$conn->getConnection(); 

                break;
            
            default:
                # code...
                break;
        }
        

        return self::$instance;
    }
    
    
}