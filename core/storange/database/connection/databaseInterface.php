<?php

namespace core\storange\database\connection;


interface DatabaseInterface{

    //private function connect();
    public function getConnection();
}