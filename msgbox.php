<?php

if(isset($_SESSION['success']))
{?>
    <div class="alert alert-success alert-dismissible" id='hideMe'>
        
        Success!
        <?php echo $_SESSION['success'];?>
    </div>
<?php 

    unset($_SESSION['success']);
}
if(isset($_SESSION['error']))
{?>
    <div class="error">
        
        Alert!
        <?php echo $_SESSION['error'];?>
    </div>
<?php
unset($_SESSION['error']);
}
?>




