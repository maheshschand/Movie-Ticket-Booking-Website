<?php
include('header.php');
?>
<style> 
table {
  
  border-collapse: collapse;
  border: 3px solid purple;
  margin: 10px;
}

th, td {
  padding: 10px;
  border: 1px solid #333;
}
</style>
<div class="content-wrapper" style="min-height: 778px;">
    
    <section class="content-header">
      <h1>
        Bookings
      </h1>
      
    </section>
    </br>
<?php 
$username = "root"; 
$password = ""; 
$database = "db_movie"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM tbl_bookings";


echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Ticket id</font> </td> 
          <td> <font face="Arial">User ID</font> </td> 
          <td> <font face="Arial">No of Seats</font> </td> 
          <td> <font face="Arial">Ticket Date</font> </td> 
          <td> <font face="Arial">Booking Date</font> </td> 
          <td> <font face="Arial">Total Amount</font> </td> 
      </tr>';

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        
        $field1name = $row["ticket_id"];
        $field2name = $row["user_id"];
        $field3name = $row["no_seats"];
        $field4name = $row["ticket_date"]; 
        $field5name = $row["date"];
        
        $field6name = $row["amount"] * $row["no_seats"];

        echo '<tr> 
                  <td>'.$field1name.'</td>
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td>
              </tr>';
    }
    $result->free();
} 
?>
</body>
</html>