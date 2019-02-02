
<?php 
require_once __DIR__.'/core/Auth.php';
$auth = new Auth;

echo '<pre>'; print_r($auth->user()); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div id="login_container">
  <center><h2>welcome to profile page
    <a href="login.php?action=logout">Log out</a></h2></center>
    </div>
</body>
</html>