<?php

require_once __DIR__.'/core/Auth.php'; 
require_once __DIR__.'/core/User.php';

$auth = new Auth;

if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    $auth->logout();
    header('location: login_form.php');
    return;
}

$email= $_POST['email'];
$password= $_POST['password'];

$userModel = new User;

$user = $userModel->get_where(['email' => $email,'password' => $password]);

if($user)
{

    if($auth->login($user)){

       // session_start();
       // $_SESSION['user'] = $user;
        header('location: profile.php');
        return;
    }
    
}	

$redirectUrl = $_SERVER['HTTP_REFERER'];
header("Location:{$redirectUrl}");
?>