
<?php 

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="psonu513@"; // Mysql password 
$db_name="matrimony"; // Database name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error()); //if connection is failed 
 } else {
 	//connected successfully
 }

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

?>