<?php
require_once __DIR__.'/Database.php';
class Post extends database{

   public function __construct(){
       parent:: __construct();
       
       $this->tableName = 'posts';

   }
   public function create($data){
    return $this->insert($data);
   }
}