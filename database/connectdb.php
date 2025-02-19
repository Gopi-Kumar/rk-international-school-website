<?php

//$root_directory = "/rkis";
//$servername = "localhost";
//$username = "root";
//$database = "rkis";
//$password = "";



$root_directory = "/";
$servername = "localhost";
$username = "u610726650_new";
$database = "u610726650_new";
$password = "2>JoSjz2U"; 



  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  
  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  
?>
