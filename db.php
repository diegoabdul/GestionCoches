<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$servername = "localhost";
$database = "aqrrvhvs_register";
$username = "aqrrvhvs_diego";
$password = "Galicia96.";
// Create connection
$con = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>