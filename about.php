<?php include('header.php');

	$qry2=mysqli_query($con,"select * from tbl_movie where movie_id='".$_GET['id']."'");
	$movie=mysqli_fetch_array($qry2);
	?>
	<style>
	.textcontact{
		font-family: 'Dancing Script', cursive;
	}
	.footer-nav{
		font-family: 'Dancing Script', cursive;
	}
	.footer{
    bottom: 0;
    width: 100%;

    background: #6cf;
    background: #222;
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

button {
    background: darkolivegreen;
    color: white;
    border-radius: 10px;
    height: 30px;
    border: 1px solid darkolivegreen;
    width: 100px;
    font: bold 15px arial, sans-serif;
    cursor: pointer;
}
</style>
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">
						<h3><?php echo $movie['movie_name']; ?></h3>
							<div class="about-top">
								<div class="grid images_3_of_2">
									<img src="<?php echo $movie['image']; ?>" alt=""/>
								</div>
								<div class="desc span_3_of_2">
									<p class="p-link" style="font-size:15px">Cast : <?php echo $movie['cast']; ?></p>
									<p class="p-link" style="font-size:15px">Release Date : <?php echo date('d-M-Y',strtotime($movie['release_date'])); ?></p>
									<p style="font-size:15px"><?php echo $movie['desc']; ?></p>
									<a href="<?php echo $movie['video_url']; ?>" target="_blank" class="watch_but">Watch Trailer</a>
								</div>
								<div class="clear"></div>
							</div>
							<?php $s=mysqli_query($con,"select DISTINCT theatre_id from tbl_shows where movie_id='".$movie['movie_id']."'");
							if(mysqli_num_rows($s))
							{?>
							<table class="table table-hover table-bordered text-center">
							<?php


									$t=mysqli_query($con,"select * from tbl_theatre where id=3");
									$theatre=mysqli_fetch_array($t);
									?>
									<tr>
										<td>
											<?php echo $theatre['name'].", ".$theatre['place'];?>
										</td>
										<td>
										<?php $tr=mysqli_query($con,"select * from tbl_shows where movie_id='".$movie['movie_id']."'");
											while($shh=mysqli_fetch_array($tr))
											{
												$ttm=mysqli_query($con,"select  * from tbl_show_time where st_id='".$shh['st_id']."'");
												$ttme=mysqli_fetch_array($ttm);

												?>

												<a href="check_login.php?show=<?php echo $shh['s_id'];?>&movie=<?php echo $shh['movie_id'];?>"><button class="btn btn-default"><?php echo $ttme['start_time'];?></button></a>
												<?php
											}
											?>
										</td>
									</tr>
									<?php

							?>
						</table>
							<?php
							}

							else
							{
								?>
								<h3>No Show Available</h3>
								<?php
							}
							?>

					</div>

			</div>
				<div class="clear"></div>
			</div>
	</div>
</div>
<div class="footer">
	<div class="wrap">
			<div class="footer-top">
				<div class="col_1_of_4 span_1_of_4">
					<div class="footer-nav">
		                <ul>
		                   <li><a href="index.php">Home</a></li>

			  		   <li><a href="login.php">Login</a></li>
		                   </ul>
		              </div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="textcontact">
						<p>Theatre Assistance<br>
						CinePolis<br>
						Ph: +91-7780482865<br>
						</p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<div class="call_info">
						<p class="txt_3">Call us :</p>
						<p class="txt_4">7780482865</p>
					</div>
				</div>

				<div class="clear"></div>
			</div>
		</div>
	</div>
</body>
</html>
