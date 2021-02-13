<?php
include('header.php');
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Upcoming Movies
      </h1>
      
    
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box --> 
      <div class="box">
        <div class="box-body">
            <form action="process_add_news.php" method="post" enctype="multipart/form-data" id="form1">
              <div class="login-form">
                <label class="control-label">Movie name</label>
                <input type="text" name="name" class="form-control" required>
                       </div>
              <div class="login-form">
                 <label class="control-label">Cast</label>
                <input type="text" name="cast" class="form-control" required>
              
              </div>
              
              <div class="login-form">
                <label class="control-label">Release Date</label>
                <input type="date" name="date" class="form-control" min="2020-12-14" required>
                         </div>
              
              <div class="login-form">
                <label class="control-label">Description</label>
                 <input type="text" name="description" class="form-control" required>
                 
              </div>
              <div class="login-form">
                  <label class="control-label">Images</label>
              <input type="file"  name="attachment" class="form-control" placeholder="Images" required>
                       </div>
              <br>
              <div class="form-group">
                <input class="submit" type="submit" value="Add News">
              </div>
        </form>
        </div> 
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
