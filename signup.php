<?php

require_once __DIR__.'/core/User.php';

$userModel = new User;

$user = $userModel->get_where(['email' => $_POST['email']],['email']);

if($user){
    $redirectUrl = $_SERVER['HTTP_REFERER'];
    header("Location:{$redirectUrl}");
}
 
$data = $userModel->signup($_POST);

if($data){
    echo "Records inserted successfully.";
} 