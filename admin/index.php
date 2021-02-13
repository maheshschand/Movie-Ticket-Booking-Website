
<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
  <title>Admin Login</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="css/style.css">
  <link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
</head>


<div class="login">
  <div class="login-header">
    <h1>Admin Login</h1>
  </div>
  

  <div class="login-form">
  <?php session_start(); include('../msgbox.php');?>
  <p class="login-box-msg">Sign in to start your session</p>
  
  <form action="page2.php" method="post">
  <input name="name" type="text" size="25" placeholder="Username" value="<?php if(isset($_COOKIE["name"])) { echo $_COOKIE["name"]; } ?>" class="input-field">
  <input name="password" type="password" size="25" placeholder="Password"value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" class="input-field">
  <br>
  <input type="checkbox" id="remember" name="remember">
  <label for="remember"> Remember Me</label>
  <br>
  <button class="btn" type="submit">Login</button> 
  

</form>
  </div>
  
</div>
</body>
</html>