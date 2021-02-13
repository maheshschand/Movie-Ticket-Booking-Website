<?php
include('../../config.php');
session_start();
$name = $_POST["name"];
$pass = $_POST["password"];
$qry=mysqli_query($con,"select * from tbl_login where username='$name' and password='$pass'");
if(mysqli_num_rows($qry))
{
	$usr=mysqli_fetch_array($qry);
	if($usr['user_type']==0)
	{
		$_SESSION['admin']=$usr['user_id'];
		header('location:index.php');
	}
	else
	{
		$_SESSION['error']="Login Failed!";
		header("location:../index.php");
	}
}
else
{
	$_SESSION['error']="Login Failed!";
	header("location:../index.php");
}
?>