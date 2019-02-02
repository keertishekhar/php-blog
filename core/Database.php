<?php

require_once __DIR__.'/Table.php';

class Database extends Table{

    protected $database;
    protected $tableName;

    public function __construct(){
        $this->database = new mysqli("localhost","root","","php-blog");
    }

    public function insert($data){

        $columns = $this->columns($data, true);

        $values = $this->columns($data);
        
        return $this->database->query("INSERT INTO {$this->tableName} ({$columns}) VALUES ({$values})");
    }

    public function select($condition = [], $columns = '*'){

        $columns = is_array($columns)?$this->columns($columns):$columns;

        $where = '';
        
        if(!empty($condition)){

            $keys = array_keys($condition);
            $values = array_values($condition);
            $where = 'WHERE ';
            foreach($keys as $key => $column){
                $where .= "`{$column}` = '{$values[$key]}'";
                if(($key + 1) != count($keys)){
                    $where .= ' AND ';
                }
            }
        }

        $result =  $this->database->query("SELECT {$columns} FROM {$this->tableName} {$where}");

        if($result->num_rows){
            return $result->fetch_assoc();
        }

        return false;
    }
    public function queury($query){

        $result = $this->database->query($query);

        if($result->num_rows){
            return $result->fetch_all();
        }
    }
}