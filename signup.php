<?php

require_once __DIR__.'/core/User.php';

$userModel = new User;



$user = $dbcon->query("SELECT email FROM users WHERE email='$email'");

if($user->num_rows){
    echo "Sorry... email already taken"; 	
    $redirectUrl = $_SERVER['HTTP_REFERER'];
    header("Location:{$redirectUrl}");
}
 
$data = $userModel->signup($_POST);

if($data){
    echo "Records inserted successfully.";
} 



?>