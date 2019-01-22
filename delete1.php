<?php
require('db.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "DELETE FROM contact WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: mensajes.php"); 
?>