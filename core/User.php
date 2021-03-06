<?php 

require_once __DIR__.'/Database.php';

class User extends Database{

    public function __construct(){
        parent::__construct();

        $this->tableName = 'users';
    }

    public function signup($data){
        return $this->insert($data);
    }

    public function get_where($data, $columns = '*'){
        return $this->select($data, $columns);
    }

}