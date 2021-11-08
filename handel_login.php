<?php 
session_start(); 
include("conData.php");
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];


// echo $_SESSION['email'] . " " . $_SESSION['password'];
$emailErr=["email"=>"","password"=>""];

  if (!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {
    unset( $_SESSION['email'] );
//    session_destroy();
    $emailErr = ["email"=>" Invalid email format" ];
    $_SESSION['emailErr']=$emailErr;
    header('location:login.php');
    exit();
  }
  echo $_POST['email']; 
  if ( (strlen( $_SESSION['password'] ) < 6 ) ) {
    unset( $_SESSION['password'] );
    unset( $_SESSION['email'] );

//    session_destroy();
    $emailErr = ["password"=>" Invalid password ,, min 6" ];
    $_SESSION['emailErr']=$emailErr;
    header('location:login.php');
    exit();
  }

// database
  if (isset($_POST['email'])) {
    $sql = "SELECT email , password
    from customers
    WHERE  email='$_POST[email]' AND PASSWORD=$_POST[password]";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {

      }
    } else {
      // echo " <h4 class='alert-danger container p-4'>0 results</h4>";
      unset( $_SESSION['email'] );
          $emailErr = ["email"=>" Incorrect email OR password" ];
          $_SESSION['emailErr']=$emailErr;
          // session_destroy();
          header('location:login.php');
          exit();
    }
}

    $_SESSION['emailErr']=$emailErr;
 header('location:home.php');
?>

