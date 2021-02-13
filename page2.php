<?php
if(!empty($_POST["remember"])) {
	setcookie ("email",$_POST["email"],time()+ (10 * 365 * 24 * 60 * 60));
	setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
	
} else {
	setcookie("email","");
	setcookie("password","");
	
}   

?>

<form action="process_login.php" id="form" method="post">
<input name="email" type="hidden" size="25" placeholder="Email" value="<?php  echo $_POST["email"];  ?>" class="input-field">
  <input name="password" type="hidden" size="25" placeholder="password"value="<?php  echo $_POST["password"];  ?>" class="input-field">
  
  </form>

<script type="text/javascript">
  document.getElementById('form').submit();
</script>