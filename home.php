<?php 
session_start();

 include("header.php");
 ?>

<?php 
      if (isset($_SESSION['email'])){            
            function username(){
                  return substr( $_SESSION['email'], 0 ,strpos($_SESSION['email'],"@",0) ); 
            }
            $_SESSION['defaultUserName']=username();
            }

?>

<div class="bg-dark d-flex" style="height:90vh">
    <h2 class="text-center text-light align-self-center mx-auto"
     style="font-size:70px" >Welcome To Our Database </h2>
     <br>
     <h2 class="text-light align-self-center text-center text-capitalize"
     style="font-size:70px">
     <?php 
      if (isset($_SESSION['email'])){
      //       echo substr( $_SESSION['email'], 0 ,strpos($_SESSION['email'],"@",0) );
      echo  " MR " .( (isset( $_SESSION["UserName"] ) ) ? $_SESSION["UserName"] :$_SESSION['defaultUserName'] );
      }


     ?>

     </h2>

</div>

 <?php
 include("footer.php");
?>
