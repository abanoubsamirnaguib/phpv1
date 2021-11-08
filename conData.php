<?php 
 $servername = "remotemysql.com";
 $username = "Iw3EFbqTfb";
 $password = "PGTYCmwSwd";
 $dbname = "Iw3EFbqTfb";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password ,$dbname);
 
 // Check connection
 if ($conn->connect_error) {
     header('location:home.php');
   die("Connection failed: " . $conn->connect_error);
 }
//  echo "Connected successfully";
 
?>