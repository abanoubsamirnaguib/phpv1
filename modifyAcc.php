<?php 
 session_start();

 include("header.php");
 ?>

<?php 
 if(!isset ($_SESSION["email"]) ){
  header('location:login.php');
}

?>

<div class="bg-dark" style="height:90vh; ">
<form class="needs-validation text-light " novalidate method="post" action='handel_modifyAcc.php'>
 <div class="form-row col-12 pt-5">
    <div class="col-md-3 mb-3">
      <label for="validationCustom01">Username</label>
      <input type="text" name="UserName" class="form-control" id="validationCustom01" placeholder="Username" value='<?php echo ( (isset( $_SESSION["UserName"] ) ) ? $_SESSION["UserName"] :$_SESSION['defaultUserName'] ) ?>' required>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="alert-danger">
      <?php 
      if (isset($_SESSION['emailErr']['UserName'])){
        echo $_SESSION['emailErr']['UserName'];
      }
      ?>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom02">password</label>
      <input type="password" name="password" class="form-control" id="validationCustom02" placeholder="password" value="Otto" required>
      <div class="valid-feedback">
        Looks good!
      </div>
      <div class="alert-danger">
      <?php 
      if (isset($_SESSION['emailErr']['password'])){
        echo $_SESSION['emailErr']['password'];
      }
      ?>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustomUsername">email</label>
      <div class="input-group">
         <!-- <div class="input-group-prepend">
           <span class="input-group-text" id="inputGroupPrepend">@</span> 
        </div>  -->
        <input type="email" name="email" class="form-control" id="validationCustomUsername" placeholder="email" value='<?php echo $_SESSION["email"]?>' aria-describedby="inputGroupPrepend" required>
        <div class="invalid-feedback">
          Please choose a email.
        </div>
      </div>
      <div class="alert-danger">
      <?php 
      if (isset($_SESSION['emailErr']['email'])){
        echo $_SESSION['emailErr']['email'];
      }
      ?>
      </div>
    </div>

    <div class="col-md-3 mb-3">
      <label for="validationCustom03">phone number</label>
      <input type="number" name="phoneNum" class="form-control" id="validationCustom03" placeholder="phone number" required value='<?php echo ( (isset( $_SESSION["phoneNum"] ) ) ? $_SESSION["phoneNum"] :"" ) ?>'>
      <div class="invalid-feedback">
        Please provide a valid phone number.
      </div>
      <div class="alert-danger">
      <?php 
      if (isset($_SESSION['emailErr']['phoneNum'])){
        echo $_SESSION['emailErr']['phoneNum'];
        // echo trim($_SESSION['phoneNum']);

      }
      ?>
      </div>

  </div>
  <div class="form-row col-12">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">City</label>
      <input type="text" name="City" class="form-control" id="validationCustom03" placeholder="City" >
      <div class="invalid-feedback">
        Please provide a valid city.
      </div>

    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">State</label>
      <input type="text" class="form-control" id="validationCustom04" placeholder="State" >
      <div class="invalid-feedback">
        Please provide a valid state.
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">Zip</label>
      <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" >
      <div class="invalid-feedback">
        Please provide a valid zip.
      </div>
    </div>
  </div>

  <div class="form-row col-12">
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom04">facebook account url.</label>
      <input type="url" name="facebookUrl" class="form-control" id="" placeholder="url" value='<?php echo ( (isset( $_SESSION["facebookUrl"] ) ) ? $_SESSION["facebookUrl"] :"" ) ?>' >
      <div class="invalid-feedback">
        Please provide a valid facebook account url.
      </div>
      <div class="alert-danger">
      <?php 
      if (isset($_SESSION['emailErr']['facebookUrl'])){
        echo $_SESSION['emailErr']['facebookUrl'];
      }
      ?>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">twitter account url</label>
      <input type="url" name="twitterUrl" class="form-control" id="" placeholder="url" value='<?php echo ( (isset( $_SESSION["twitterUrl"] ) ) ? $_SESSION["twitterUrl"] :"" ) ?>' >
      <div class="invalid-feedback">
        Please provide a valid twitter account url.
      </div>
      <div class="alert-danger">
      <?php 
      if (isset($_SESSION['emailErr']['twitterUrl'])){
        echo $_SESSION['emailErr']['twitterUrl'];
      }
      ?>
      </div>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationCustom05">instagram account url.</label>
      <input type="url" name="instagramUrl" class="form-control" id="" placeholder="url" value='<?php echo ( (isset( $_SESSION["instagramUrl"] ) ) ? $_SESSION["instagramUrl"] :"" ) ?>' >
      <div class="invalid-feedback">
        Please provide a valid instagram account url.
      </div>
      <div class="alert-danger">
      <?php 
      if (isset($_SESSION['emailErr']['instagramUrl'])){
        echo $_SESSION['emailErr']['instagramUrl'];
      }
      ?>
      </div>
    </div>
  </div>


  <div class="form-group col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <button class="btn btn-primary ml-5 submit-acc" type="submit">Submit form</button>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
    })();
</script>

<div class="text-danger ml-5 mt-2 p-1 bg-light w-25 alert-acc">
  <?php 
   
   if (isset($_SESSION["emailErr"]) ){
    // echo print_r ($_SESSION['emailErr']);
    $mess=" <div class='text-success text-center font-weight-bolder'>Sucsses Intery </div>";
    $err=0;
    foreach($_SESSION['emailErr'] as $key =>$value){
      if ($value !== ""){
        // $mess[$key] += $value;
        $mess=$value;
        echo $mess."<br>"; $err++;
      };
    }
    if($err == 0)  echo $mess;
  };
  if (!isset($_SESSION["emailErr"]) ){ $mess="";echo $mess;}
  ?>
</div>
</div>
<?php

//footer
include("footer.php");
?>