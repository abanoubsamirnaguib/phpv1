<?php 
 session_start();

 include("header.php");
 
 if (isset($_SESSION['email']) ){
    header('location:modifyAcc.php');
 }
 else if(! isset($_SESSION['email']) ){
    header('location:login.php');
 }

 ?>


<?php
//footer
include("footer.php");
?>

<?php 

 
?>