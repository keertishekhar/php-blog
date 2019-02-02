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

   public function get(){
      return $this->query("SELECT posts.*, concat(users.firstname,' ',users.lastname) as name,users.email FROM posts INNER JOIN users ON posts.user_id = users.id
       ");
   }
}