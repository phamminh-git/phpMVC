<?php 

class DAO{
    protected $connection;
    public function __construct(){
        $this->connection=new mysqli('localhost', 'root', 'phamminh0210', 'php_coban');
    }
}

 ?>