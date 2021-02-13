<?php
session_start();
if(!isset($_SESSION['admin']))
{
  header('location:../index.php');
}
date_default_timezone_set('Asia/Kolkata');
include('../../config.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../css/header.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
  
</head>
<body >
<!-- Site wrapper -->
<div>

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar" style="background: aquamarine;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <h2>Admin</h2>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li  >
          <a href="index.php">
            <i class="fa fa-home"></i> <span>Home</span>
            
          </a>
        </li>
        
          
        </li>
        <li>
          <a href="add_movie_news.php">
            <i class="fa fa-plus"></i> <span>Add Upcoming Movies</span>
            
          </a>
        </li>

        <li>
          <a href="add_movie.php">
            <i class="fa fa-plus"></i> <span>Add Movie</span>
            
          </a>
        </li>

        <li>
          <a href="add_show.php">
            <i class="fa fa-plus"></i> <span>Add Show</span>
            
          </a>
        </li>

        <li>
          <a href="tickets.php">
            <i class="fa fa-ticket"></i> <span>Bookings</span>
            
          </a>
        </li>

        <li>
          <a href="logout.php">
            <span>Logout</span>
          </a>
        </li>
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>