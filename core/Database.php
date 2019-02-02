<?php

require_once __DIR__.'/Table.php';

class Database extends Table{

    protected $database;
    protected $tableName;

    public function __construct(){
        $this->database = new mysqli("localhost","root","","php-auth");
    }

    public function insert($data){

        $columns = $this->columns($data, true);

        $values = $this->columns($data);
        
        return $this->database->query("INSERT INTO {$this->tableName} ({$columns}) VALUES ({$values})");
    }

    public function select($condition){
        $this->database->query("INSERT INTO {$this->tableName} ({$columns}) VALUES ({$values})");
    }
    public function profilepage(){

        
    }
}