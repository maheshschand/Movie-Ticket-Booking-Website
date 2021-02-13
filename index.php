<html>
<body>
<?php
include('header.php');
?>
<style>
	.list_1_of_2 {
    width: 100%;
}
.data {
	color: black;
	line-height: 1.8em;
	font-family: Roboto;
}


	.content-top h3 {
    color: darkmagenta;
    font-size: 2em;
    padding: 1.5%;
	font-family: Roboto;
	}
	.images_1_of_3 img {
    max-width: 300px;
	display: block;
	border: 1px solid black;
	}
	.link {
    font-size: 18px;
    font-family: Roboto;
    color: #313131;
    font-weight: bold;
    text-decoration: none;
    line-height: 1.8em;
}

strong {
	
	font-size: 20px;
}
.listimg1 {
    width: 100%;
    float: left;
    margin-right: 6%;

}
.text-top {
    padding-top: 6px;
    display: inline-block;
    font-size: 16px;
    line-height: 1.8em;
    color: black;
}
</style>

<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="listview_1_of_3 images_1_of_3">
					<h3>Upcoming Movies</h3>
					<?php
					$qry3=mysqli_query($con,"select * from tbl_news");

					while($n=mysqli_fetch_array($qry3))
					{
					?>
				<div class="content-left">
					<div class="listimg listimg_1_of_2">
						<br>
						 <img src="admin/<?php echo $n['attachment'];?>">
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<div class="text list_1_of_2">
						  <div class="extra-wrap">
						  	<span style="text-color:#000" class="data"><strong><?php echo $n['name'];?></strong><br>
						  	<span style="text-color:#000" class="data"><b>Cast :<?php echo $n['cast'];?></b><br>
                                <div class="data">Release Date :<?php echo date('d-M-Y',strtotime($n['news_date'])); ?></div>



                                <span class="text-top"><?php echo $n['description'];?></span>
                          </div>
					</div>
					<div class="clear"></div>
				</div>
				<?php
				}
				?>


		</div>
		<div class="listview_1_of_3 images_1_of_3">
					<h3>Trending Trailers</h3>
						<div class="middle-list">
					<?php
					$qry4=mysqli_query($con,"select * from tbl_movie order by rand()");

					while($nm=mysqli_fetch_array($qry4))
					{
					?>

						<div class="listimg1">
							 <a target="_blank" href="<?php echo $nm['video_url'];?>"><img src="<?php echo $nm['image'];?>" alt=""/></a>
							 <a target="_blank" href="<?php echo $nm['video_url'];?>" class="link"><?php echo $nm['movie_name'];?></a>
						</div>
					<?php
					}
					?>
					</div>


		</div>
		<?php include('movie_sidebar.php');?>
	</div>
</div>
<?php include('footer.php');?>
</div>
<?php include('searchbar.php');?>
