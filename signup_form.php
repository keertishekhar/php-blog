<?php 
require_once __DIR__.'/core/Auth.php';

if((new Auth)->isUser()){
	header('Location:profile.php');
	return;
}
?>
<!DOCTYPE html>
 <head>
 <link href="./css/style.css" type="text/css" rel="stylesheet"/>
 </head>
 <body>
 <div class="container">
     <form action="signup.php" method="post" >
       
          <div class="form-group">
            <label class="form-label">First Name</label>
            <input class="form-control" type= "text" name="firstname" Placeholder="First name" required>
          </div>
          <div class="form-group">
            <label class="form-label">Last Name</label>
            <input class="form-control" type="text" name="lastname" Placeholder="Last name" required>
          </div>
          <div class="form-group">
            <label  class="form-label">Email Address</label>
            <input class="form-control" type="email" name="email" Placeholder="Email Id" required>
          </div>
          <div class="form-group">
            <label class="form-label">Password </label>
            <input class="form-control" type="password" name="password" required >
          </div>
          <div class="form-group">
            <label class="form-label">Confirm Password</label>
            <input class="form-control" type="password" name="password_confirm" required >
          </div>
          <div class="form-group">
            <label class="form-label">Gender
            </label>
            <div>
            <label class="checkbox-inline"> <input  type="radio" name="gender" value="male" required > Male</label>
            <label class="checkbox-inline"> <input  type="radio" name="gender" value="female" required > Female</label>
            </div>
          </div>
          <div class="form-group">
            <button  class="btn btn-primary" type="submit"> Signup</button>
          </div>
     
         </form>
    
    </div>
 </body>
</html>