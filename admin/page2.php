<?php
if(!empty($_POST["remember"])) {
	setcookie ("name",$_POST["name"],time()+ (10 * 365 * 24 * 60 * 60));
	setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
	
} else {
	setcookie("name","");
	setcookie("password","");
	
}   

?>

<form action="pages/process_login.php" id="form" method="post">
<input name="name" type="hidden" size="25" placeholder="Username" value="<?php  echo $_POST["name"];  ?>" class="input-field">
  <input name="password" type="hidden" size="25" placeholder="password"value="<?php  echo $_POST["password"];  ?>" class="input-field">
  
  </form>

<script type="text/javascript">
  document.getElementById('form').submit();
</script>