<?php 


namespace core\storange\database\connection;

use core\storange\database\connection\DatabaseInterface;
use core\storange\database\Database;


class PDOConnection extends Database implements DatabaseInterface{
    
    /**
     * this class returns a instances of a PDO class 
     */

    private $pdoQuery;
    private $conn;


    private function __construct()
    {
        parent::__construct();

        $this->pdoQuery=$this->driver.
        ":host=".$this->host.
        ";dbname=".$this->dbname;

        $this->connect();
    }


     function connect(){
        try {
            $this->conn = new \PDO($this->pdoQuery,$this->user,$this->password);
            //code...
        } catch (\Throwable $th) {
            //throw $th;

            echo $th;
            
            exit;
        }
        
    }


    public function getConnection(){

        if($this->conn) return $this->conn;

        return false;

    }
    
}