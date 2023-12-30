<?php 


namespace core\storange\database;


abstract class Database{
    
    protected $dbname;
    protected $host;
    protected $driver;
    protected $user;
    protected $password;

    //$dbname,$host,$driver,$user,$password
    function __construct()
    {
        $this->dbname="test";
        $this->host="localhost";
        $this->driver="mysql";
        $this->user="root";
        $this->password="";
    }
    

    protected abstract function connect();
    
}