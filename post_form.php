<?php 
require_once __DIR__.'/core/Auth.php';

if((new Auth)->isGuest()){
	header('Location:login_form.php');
	return;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div><form action="post.php" method="post">
<label>Title</label>
<input type="text" name="title" placeholder="title">
<label>Discription</label>
<input type="text" name="description" placeholder="Discription">
<input type="submit" name="post">
</div>

    
</body>
</html>