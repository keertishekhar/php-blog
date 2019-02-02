<?php 


require_once __DIR__.'/core/Post.php';
require_once __DIR__.'/core/Auth.php';

$postModel = new Post;
$auth = new Auth;

$data = [
    'title' => $_POST['title'],
    'description' => $_POST['description'],
    'user_id' => $auth->id()
];

$postModel->create($data);

header('Location:post_form.php');
return;
?>