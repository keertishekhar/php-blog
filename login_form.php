<?php 
require_once __DIR__.'/core/Auth.php';

if((new Auth)->isUser()){
	header('Location:profile.php');
	return;
}
?>
<!DOCTYPE html>
<head></head>
<body>
<div >
<form action="login.php" method="post">
<input type="text" name="email" Placeholder="Email Id" required>
<input type="password" name="password" placeholder="Password" required>
<input type="submit" name="login" placeholder="Login">
</form>
</div>

</body>
</html>
