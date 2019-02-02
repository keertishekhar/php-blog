<?php 


require_once __DIR__.'/core/Post.php';
require_once __DIR__.'/core/Auth.php';

$postModel = new Post;
$auth = new Auth;
$data = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    //'user_id' => $usertModel->user()
];

print_r($auth->user()); die;

$postModel->create($data);

?>