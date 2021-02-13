<?php
    session_start();
    include('../../config.php');
    extract($_POST);
    
        mysqli_query($con,"insert into  tbl_shows values(NULL,'$stime',3,'$movie','$sdate','1','0')");
    
    $_SESSION['success']="Show Added";
    header('location:add_show.php');
    ?>
    