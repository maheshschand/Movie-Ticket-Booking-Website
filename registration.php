<?php include('header.php');?>

<style>
  .login {
        margin: 0 auto;
        max-width: 500px;
        font-family: "Poppins", sans-serif;
      }

      .login-header {
        text-align: center;
        font-size: 200%;
      }

      .registration-form {
        border: 0.5px solid #fff;
        background-color: cornflowerblue;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #000;
      }

      .registration-form h3 {
        text-align: left;
        margin-left: 40px;
        color: #fff;
      }

      .registration-form {
        box-sizing: border-box;
        padding-top: 15px;
        padding-bottom: 10%;
        margin: 5% auto;
        text-align: center;
      }

      .login input[type="text"],
      .login input[type="password"], .login select {
        max-width: 400px;
        width: 80%;
        line-height: 3em;
        font-family: "Ubuntu", sans-serif;
        margin: 1em 2em;
        border-radius: 5px;
        border: 2px solid #f2f2f2;
        outline: none;
        padding-left: 10px;
        height: 45px;
      }

      .registration-form input[type="button"] {
        height: 30px;
        width: 100px;
        background: #fff;
        border: 1px solid #f2f2f2;
        border-radius: 20px;
        color: slategrey;
        text-transform: uppercase;
        font-family: "Ubuntu", sans-serif;
        cursor: pointer;
      }

      .error {
        color: #d8000c;
        background-color: #ffd2d2;
      }

      .btn {
        background: orange;
        color: white;
        border-radius: 20px;
        border: 1px solid orange;
        height: 50px;
        width: 100px;
        font: bold 15px arial, sans-serif;
      }
</style>
<div class="content" style="background-color: aquamarine;">
	<div class="wrap">
		<div class="content-top" style="min-height:300px;padding:50px">

        <div class="login">
        <div class="login-header">
				  Register</div>

				<form action="process_registration.php" method="post" class="registration-form">
				    <div class="form-group has-feedback">
        <input name="name" type="text" size="25" placeholder="Name" class="form-control" required/>


      </div>
      <div class="form-group has-feedback">
        <input name="age" type="text" size="25" placeholder="Age" class="form-control" required/>


      </div>
      <div class="form-group has-feedback">
        <select name="gender" class="form-control">
            <option value>Select Gender</option>
            <option>Male</option>
            <option>Female</option>
        </select>

      </div>
      <div class="form-group has-feedback">
        <input name="phone" type="text" size="25" placeholder="Mobile Number" class="form-control" required/>


      </div>
      <div class="form-group has-feedback">
        <input name="email" type="text" size="25" placeholder="Email" class="form-control" required/>


      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" required/>


      </div>
      <div class="form-group has-feedback">
        <input name="cpassword" type="password" size="25" placeholder="Password" class="form-control" placeholder="Password" required/>

        
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-primary">Login</button>
      </div>
      </div>
</div>
    </form>
			</div>
		</div>
		<div class="clear"></div>

	</div>
<?php include('footer.php');?>
</div>
<script>
        <?php $frm->applyvalidations("form1");?>
    </script>
