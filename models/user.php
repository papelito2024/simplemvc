<?php

namespace models;

use models\Model;

class User extends Model{


    function __cosntruct(){
        /**
         * need to specify the container of the users this cases a
         *  table in a db
         */
        parent::__construct("user");

    }

    function createtUser(){

        
    }


    function updateUser(){

    }


    

    
}