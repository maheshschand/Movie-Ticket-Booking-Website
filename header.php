<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Kolkata');
?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>CinePolis</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='js/jquery.color-RGBa-patch.js'></script>
<script src='js/example.js'></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Poppins&family=Roboto&display=swap" rel="stylesheet"><style>
<style>

.content {
		height: 500px;
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
	.header {
		background-color: goldenrod;
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
			  		   <li><?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?><a href="profile.php"><?php echo $user['name'];?></a><a href="logout.php">Logout</a><?php }else{?><a href="login.php">Login</a><?php }?></li>
			        </ul>
			  </div>
 			<div class="clear"></div>
   		</div>
    </div>
     			<div class="clear"></div>

