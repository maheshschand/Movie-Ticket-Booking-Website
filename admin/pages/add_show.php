<?php
include('header.php');
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Show
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
          <?php include('../../msgbox.php');?>
          <form action="process_addshow.php" method="post" id="form1">
            <div class="form-group">
              <label class="control-label">Select Movie</label>
              <select name="movie" class="form-control" required>
                <option value>Select Movie</option>
                <?php
                  $mv=mysqli_query($con,"select * from tbl_movie where status='0'");
                  while($movie=mysqli_fetch_array($mv))
                  {
                    ?>
                    <option value="<?php echo $movie['movie_id'];?>"><?php echo $movie['movie_name']; ?></option>
                    <?php
                  }
                ?>
              </select>
                     </div>
                     
             
            <div class="form-group">
            <option value>Select Timings</option>
            <select name="stime" class="form-control" id="stime" required>  
                        <option value="1" >Screen 1 Morning( 11:00:00 )</option>         
                        <option value="2" >Screen 1 Matinee( 14:00:00 )</option>
                        <option value="3" >Screen 1 First( 18:00:00 )</option>
                        <option value="4">Screen 1 Second( 21:00:00 )</option>
                        <option value="5" >Screen 2 Morning( 11:00:00 )</option>         
                        <option value="6" >Screen 2 Matinee( 14:00:00 )</option>
                        <option value="7" >Screen 2 First( 18:00:00 )</option>
                        <option value="8">Screen 2 Second( 21:00:00 )</option>
                        <option value="9" >Screen 3 Morning( 11:00:00 )</option>         
                        <option value="10" >Screen 3 Matinee( 14:00:00 )</option>
                        <option value="11" >Screen 3 First( 18:00:00 )</option>
                        <option value="12">Screen 3 Second( 21:00:00 )</option>
            </select>
              
            </div>
            <div class="form-group">
              <label class="control-label">Start Date</label>
              
              <input type="date" class="form-control" id="date" name="sdate" min = '2020-12-12' max = '2000-13-13'>
              </div>
            <div class="form-group">
                <input class="submit" type="submit" value="Add Show">
              </div>
          </form>
        </div> 
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <?php
include('footer.php');
?>
<script>
function getDate() {
  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth()+1; //January is 0!
  var yyyy = today.getFullYear();

  if(dd<10) {
      dd = '0'+dd
  } 

  if(mm<10) {
      mm = '0'+mm
  } 

  today = yyyy + '-' + mm + '-' + dd;
  console.log(today);
  document.getElementById("date").value = today;
  document.getElementById("date").setAttribute("max", today);
  document.getElementById("date").setAttribute("min", today);
}


window.onload = function() {
  getDate();
};
</script>