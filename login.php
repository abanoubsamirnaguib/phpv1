<?php 
 session_start();

 include("header.php");
 ?>

<div class="bg-dark d-flex justify-content-around" style="height:90vh">

<form class="mt-5" method="post" action="handel_login.php">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-light">Email address</label>
    <input type="email"  name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</small>
  
    <div class="alert-danger">
        <?php 
        if (isset($_SESSION['emailErr']['email'])){
          echo $_SESSION['emailErr']['email'];
        }   
        
        ?>
      </div>

  </div>
  <div class="form-group ">
    <label for="exampleInputPassword1" class="text-light">Password</label>
    <input  type="password"  name='password'  class="form-control" id="exampleInputPassword1" placeholder="Password"> 
    <div class="alert-danger">
        <?php 
        if (isset($_SESSION['emailErr']['password'])){
          echo $_SESSION['emailErr']['password'];
        }   
        
        ?>
      </div>
  </div>
  <!-- <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
  <button type="submit" class="btn btn-primary" >Submit</button>

              <div class=" pt-5 container text-light font-weight-bolder">
              default username is company@gmail.com <br>
              default password is 121212
              </div>
</form>

              
</div>
<?php 
  if((isset ($_SESSION["email"])) && (isset ($_SESSION["password"]))  ){
    header('location:modifyAcc.php');
  };
 ?>

 <?php
 //footer
 include("footer.php");
?>