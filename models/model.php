<?php

namespace models;

use core\storange\Storange;

use core\storange\database\connection\Connection;


class Model{

    /**
     * container is the space where our data is structured 
     * for example could be a bucket a collection or a
     *  table in a relacional db
     */

    protected $container;


    function __construct($container){

        $this->container=$container;

        
    }

    /**
     * define common methods to use in our models
     */
    protected function getAll(){

        $db = Connection::connect("mysql");

        $db->read("SELECT * FROM ".$this->container);
    }


    protected function getByID(){

    }

    protected function deleteById(){

    }


    


}