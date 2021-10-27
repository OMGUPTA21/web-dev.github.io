<?php
// Create connection
$server="localhost";
$username="root";
$password="";
$con =  mysqli_connect($server, $username, $password);
// Check connection
if (! $con) {
  die("Connection failed: ".mysqli_connect_error());
}
/*echo "successfull";
*/
$name = $last_name = $phone = $country = $textarea = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $last_name = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $country = test_input($_POST["country"]);
  $textarea = test_input($_POST["textarea"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  echo $data;


}


/*
$name = $_POST['name'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$country = $_POST['country'];
$subject = $_POST['subject'];

$sql="INSERT INTO `docto` (`name`, `lname`, `email`, `phone`, `country`, `subject`, `date`) 
VALUES ('$name', '$lname', '$email', '$phone', '$country', '$subject', current_timestamp());";

if($con->query($sql)==true){
  echo"inderted";
}
else{
  echo"ERROR: $sql l<br> $con->error";
}
$con->close();

*/
?>