<?php
include('header.php');
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Movie
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
          <?php include('../../msgbox.php');?>
          <form action="process_add_movie.php" method="post" enctype="multipart/form-data" id="form1">
            <div class="form-group">
            
              <label class="control-label">Movie Name</label>
              <input type="text" name="name" class="form-control" required/>
              </div>
            <div class="form-group">
              <label class="control-label">Cast</label>
              <input type="text" name="cast" class="form-control" required/>
              
            </div>
            <div class="form-group">
              <label class="control-label">Description</label>
              <textarea name="desc" class="form-control" required></textarea>
                          </div>
            <div class="form-group">
              <label class="control-label">Release Date</label>
              <input type="date" class="form-control" id="date" name="rdate" max = '2024-12-12'>
              
            </div>
            <div class="form-group">
              <label class="control-label">Image</label>
              <input type="file" name="image" class="form-control" required/>
                     </div>
            <br>
            <div class="form-group">
              <label class="control-label">Trailer Youtube Link</label>
              <input type="text" name="video" class="form-control"/>
                       </div>
            <div class="form-group">
                <input class="submit" type="submit" value="Add Movie">
              </div>
          </form>
        </div> 
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  
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
  document.getElementById("date").setAttribute("max", today);
}


window.onload = function() {
  getDate();
};
</script>