<?php

require_once "database_connection.php";
require_once __DIR__.'/core/Auth.php'; 

$auth = new Auth;

if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    $auth->logout();
    header('location: login_form.php');
    return;
}

$email= $_POST['email'];
$password= $_POST['password'];

$user=$dbcon->query("SELECT * FROM users WHERE email='$email'AND `password`='$password'");

if($user->num_rows)
{
    
    if($auth->login($user->fetch_assoc())){

        header('location: profile.php');
        return;
    }
    
}	

$redirectUrl = $_SERVER['HTTP_REFERER'];
header("Location:{$redirectUrl}");
?>