<?php
include ('config.php');
session_start();
date_default_timezone_set('Asia/Kolkata');
?>

<!DOCTYPE html>
<html>
  <head>
    <title>CinePolis</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
    <link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Poppins&display=swap" rel="stylesheet">
    <style>
      .header {
        background-color: aquamarine;
        height: 700px;
      }
      .h-logo {
		font-family: 'Dancing Script', cursive;
		font-size: 70px;
	}
	#example-one a:hover {
		color: darkviolet;
		font-weight: bold;
		font-size: 16px;
	}
	#example-one a {
		color: darkblue;
		font-weight: bold;
		font-size: 16px;
	}
      .header-top {
        background-color: goldenrod;
      }

      .login {
        margin: 0 auto;
        max-width: 500px;
        font-family: "Poppins", sans-serif;
      }

      .login-header {
        text-align: center;
        font-size: 200%;
      }

      .login-form {
        border: 0.5px solid #fff;
        background-color: cornflowerblue;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #000;
      }

      .login-form h3 {
        text-align: left;
        margin-left: 40px;
        color: #fff;
      }

      .login-form {
        box-sizing: border-box;
        padding-top: 15px;
        padding-bottom: 10%;
        margin: 5% auto;
        text-align: center;
      }

      .login input[type="text"],
      .login input[type="password"] {
        max-width: 400px;
        width: 80%;
        line-height: 3em;
        font-family: "Ubuntu", sans-serif;
        margin: 1em 2em;
        border-radius: 5px;
        border: 2px solid #f2f2f2;
        outline: none;
        padding-left: 10px;
      }

      .login-form input[type="button"] {
        height: 30px;
        width: 100px;
        background: #fff;
        border: 1px solid #f2f2f2;
        border-radius: 20px;
        color: slategrey;
        text-transform: uppercase;
        font-family: "Ubuntu", sans-serif;
        cursor: pointer;
      }

      .error {
        color: #d8000c;
        background-color: #ffd2d2;
      }

      .btn {
        background: orange;
        color: white;
        border-radius: 20px;
        border: 1px solid orange;
        height: 50px;
        width: 100px;
        font: bold 15px arial, sans-serif;
      }
      input[type="checkbox"] + label {
        display: block;
        margin: 0.2em;
        cursor: pointer;
        padding: 0.2em;
      }

      input[type="checkbox"] {
        display: none;
      }

      input[type="checkbox"] + label:before {
        content: "\2714";
        border: 0.1em solid #000;
        border-radius: 0.2em;
        display: inline-block;
        width: 1em;
        height: 1em;
        padding-left: 0.2em;
        padding-bottom: 0.3em;
        margin-right: 0.2em;
        vertical-align: bottom;
        color: transparent;
        transition: 0.2s;
      }

      input[type="checkbox"] + label:active:before {
        transform: scale(0);
      }

      input[type="checkbox"]:checked + label:before {
        color: #fff;
      }

      input[type="checkbox"]:disabled + label:before {
        transform: scale(1);
        border-color: #aaa;
      }

      input[type="checkbox"]:checked:disabled + label:before {
        transform: scale(1);
        background-color: #bfb;
        border-color: #bfb;
      }

      a {
    color: yellow;
    font-size: 16px;
    line-height: 1.5em;
}
    </style>
  </head>

  <body>
    <div class="header">
      <div class="header-top">
        <div class="wrap">
        <div class="h-logo" >
      <p>CinePolis</p>
    </div>
          <div class="nav-wrap">
            <ul class="group" id="example-one">
              <li><a href="index.php">Home</a></li>
              <li>
                <?php if (isset($_SESSION['user'])) {
                  $us = mysqli_query($con, "select * from tbl_registration where user_id='" . $_SESSION['user'] . "'");
                  $user = mysqli_fetch_array($us); ?>
                <a href="profile.php">
                  <?php echo $user['name']; ?>
                </a>
                <a href="logout.php">Logout</a>
                <?php
                } else { ?>
                <a href="login.php">Login</a>
                <?php
                } ?>
              </li>
            </ul>
          </div>
          <div class="clear"></div>
        </div>
      </div>
      <div class="clear"></div>

      <div class="login">
        <div class="login-header">
          <h1>User Login</h1>
        </div>

        <div class="login-form">
          <p class="login-box-msg">Sign in to start your session</p>

          <form action="page2.php" method="post">
            <input name="email" type="text" size="25" placeholder="Email" value="<?php if (isset($_COOKIE["email"])) {
            echo $_COOKIE["email"];} ?>" class="input-field"> 
            <input name="password" type="password" size="25" placeholder="Password" value="<?php if (isset($_COOKIE["password"])) 
            {echo $_COOKIE["password"];} ?>" class="input-field">
            <br>
            <input type="checkbox" id="remember" name="remember" />
            <label for="remember"> Remember Me</label>
            <br>
            <p>New Here, <a href="registration.php">Register here</a></p>
            <br>
            <button class="btn" type="submit">Login</button>
          </form>
        </div>
      </div>
      <?php include ('footer.php'); ?>
    </div>
  </body>
</html>
