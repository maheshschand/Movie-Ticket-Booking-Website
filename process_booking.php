
<?php include('header.php');
if(!isset($_SESSION['user']))
{
	header('location:login.php');
}?>
  
<style>
   input[type=text], input[type=email], select, textarea, input[type=date] {
  width: 40%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: none;
}

form {
  margin-top: 10px;
}

#booking-form {
    padding-top: 96px;
    padding-bottom: 102px;
}

textarea {
    resize: none;
    overflow: auto;
}

.submit {
    background: #0066A2;
    color: white;
    border-color: #0066A2;
    height: 50px;
    width: 200px;
    font: bold 15px arial, sans-serif;
    cursor: pointer;
}

        .booking-form {
    box-sizing: border-box;
    padding-top: 15px;
    padding-bottom: 10%;
    margin: 5% 5%;
    text-align: center;
    width: 600px;
    margin-left: auto;
    border: 2px solid black;
    background-color: lightyellow;
    margin-right: auto;
}
</style>
</div>
<div class="content">
	<div class="wrap">
		<div class="content-top">
            <h3 style="text-align: center;">Payment</h3>
            <div class="login">
        <div class="login-header">
			<form action="bank.php" method="post" class="booking-form">
			
   <label class="control-label">Name on Card</label>
    <input type="text" class="form-control" name="name" required>

    <div class="form-group">
   <label class="control-label">Card Number</label>
    <input type="text" class="form-control" name="number" pattern="\d{16}" required title="Enter 16 digit card number">
  
</div>      
<div class="form-group" style="margin-right: 10px;">
   <label class="control-label">Expiration date</label>
   <input type="date" class="form-control" id="date" name="date" min = '2020-12-12' required>
              
</div>
    <br>
<div class="form-group" style="margin-right: 130px;">
   <label class="control-label">CVV</label>
    <input type="text" class="form-control" name="cvv" pattern="\d{3}" required style="width:10%;">
</div>
<div class="form-group">
    <input type="submit" class="submit" value="Make Payment">
    </form>
</div>
</div>
</div>
</div>
			</div>
			
		<div class="clear"></div>	
		
    </div>

<?php include('footer.php');?>
</div>
<?php
    
    extract($_POST);
    include('config.php');
    $_SESSION['screen']=$screen;
    $_SESSION['seats']=$seats;
    $_SESSION['amount']=$amount;
    $_SESSION['date']=$date;
    
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
  
  document.getElementById("date").setAttribute("min", today);
}


window.onload = function() {
  getDate();
};
</script>
