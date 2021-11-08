<?php 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "monday";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password ,$dbname);
 
 // Check connection
 if ($conn->connect_error) {
     header('location:home.php');
   die("Connection failed: " . $conn->connect_error);
 }
//  echo "Connected successfully";
 
?>