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
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Poppins&family=Roboto&display=swap" rel="stylesheet">
<style>
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
	h3 {
		font-size: 2rem;
		color: darkorchid;
	}
	h4 {
		font-size: 1.2rem;
		color: darkblue;
	}
	.header {
		background-color: black;
	}
	.footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    
    background: beige;
}
table {
  
  border-collapse: collapse;
  border: 3px solid darkblue;
  
}
thead {
	background: bisque;
    font-weight: bold;
    border: 3px solid darkblue;
}

th, td {
  padding: 20px;
  border: 2px solid #333;
}

</style>
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="wrap">
			<div class="h-logo">
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


<?php
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}
	
	?>
<div class="content">
	<div class="wrap">
		
				
						<h3>My Bookings</h3>
						<br>
						<?php include('msgbox.php');?>
						<?php
				$bk=mysqli_query($con,"select * from tbl_bookings where user_id='".$_SESSION['user']."'");
				if(mysqli_num_rows($bk))
				{
					?>
					<table>
						<thead>
						<th>Booking Id</th>
						<th>Movie</th>
						<th>Theatre</th>
						<th>Screen</th>
						<th>Show</th>
						<th>Seats</th>
						<th>Amount</th>
						<th>Cancel</th>
						</thead>
						<tbody>
						<?php
						while($bkg=mysqli_fetch_array($bk))
						{
							$m=mysqli_query($con,"select * from tbl_movie where movie_id=(select movie_id from tbl_shows where s_id='".$bkg['show_id']."')");
							$mov=mysqli_fetch_array($m);
							$s=mysqli_query($con,"select * from tbl_screens where screen_id='".$bkg['screen_id']."'");
							$srn=mysqli_fetch_array($s);
							$tt=mysqli_query($con,"select * from tbl_theatre where id='3'");
							$thr=mysqli_fetch_array($tt);
							$st=mysqli_query($con,"select * from tbl_show_time where st_id=(select st_id from tbl_shows where s_id='".$bkg['show_id']."')");
							$stm=mysqli_fetch_array($st);
							?>
							<tr>
								<td>
									<?php echo $bkg['ticket_id'];?>
								</td>
								<td>
									<?php echo $mov['movie_name'];?>
								</td>
								<td>
									<?php echo $thr['name'];?>
								</td>
								<td>
									<?php echo $srn['screen_name'];?>
								</td>
								<td>
									<?php echo $stm['name'];?>
								</td>
								<td>
									<?php echo $bkg['no_seats'];?>
								</td>
								<td>
									Rs <?php echo $bkg['amount'];?>
								</td>
								<td>
									<?php  if($bkg['ticket_date']<date('Y-m-d'))
									{
										?>
										<i class="glyphicon glyphicon-ok"></i>
										<?php
									}
									else
									{?>
									<a href="cancel.php?id=<?php echo $bkg['book_id'];?>">Cancel</a>
									<?php
									}
									?>
								</td>
							</tr>
							<?php
						}
						?></tbody>
					</table>
					<?php
				}
				else
				{
					?>
					<h4>No Previous Bookings</h4>
					<?php
				}
				?>
					
			
	</div>
</div>

<!-- <script type="text/javascript">
	$('#seats').change(function(){
		var charge=<?php echo $screen['charge'];?>;
		amount=charge*$(this).val();
		$('#amount').html("Rs "+amount);
		$('#hm').val(amount);
	});
</script> -->
</div>
      <?php include ('footer.php'); ?>
    </div>