<?php 
session_start(); 
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=$_POST['password'];
$_SESSION['UserName']=$_POST['UserName'];
$_SESSION['phoneNum']=$_POST['phoneNum'];
$_SESSION['City']=$_POST['City'];
$_SESSION['facebookUrl']=$_POST['facebookUrl'];
$_SESSION['twitterUrl']=$_POST['twitterUrl'];
$_SESSION['instagramUrl']=$_POST['instagramUrl'];


$emailErr=[ ];
// "email"=>"","password"=>"","UserName"=>"", "phoneNum"=>""
//         ,"facebookUrl"=>"","twitterUrl"=>"","instagramUrl"=>""

//username validation
if ( (strlen($_SESSION['UserName']) > 30) ) {   
    $emailErr['UserName'] =" Invalid UserName lenght format your max 30" ;
    $_SESSION['emailErr']=$emailErr;
  };
if (($_SESSION['UserName']=="" ) ){ 
     $emailErr['UserName']= " Invalid UserName";
     $_SESSION['emailErr']=$emailErr;
    };

//password validation
if ( strlen($_SESSION['password']) > 15   ) {   
        $emailErr['password'] =" Invalid password lenght format your max 30" ;
        $_SESSION['emailErr']=$emailErr;
};

//email validation
if ( !filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)  ) {   
        $emailErr['email'] =" Invalid email format" ;
        $_SESSION['emailErr']=$emailErr;
      };

//phoneNum validation
if ( (strlen($_SESSION['phoneNum']) > 11) ) {   
        $emailErr['phoneNum'] =" Invalid phoneNum lenght format your max 11" ;
        $_SESSION['emailErr']=$emailErr;
      };       
if(is_int(trim($_SESSION['phoneNum'])) ){
    $emailErr['phoneNum'] ="Invalid phoneNum format" ;
    $_SESSION['emailErr']=$emailErr;
        };

//URL validation
if (!preg_match("/\b(?:(?:https?|ftp):\/\/www\.facebook.com)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_SESSION['facebookUrl']) ){   
            $emailErr['facebookUrl'] =" Invalid facebook Url format" ;
            $_SESSION['emailErr']=$emailErr;
        };
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.twitter.com)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_SESSION['twitterUrl']) ){   
            $emailErr['twitterUrl'] =" Invalid twitter Url format" ;
            $_SESSION['emailErr']=$emailErr;
        };
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.instagram.com)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$_SESSION['instagramUrl']) ){   
            $emailErr['instagramUrl'] =" Invalid instagram Url format" ;
            $_SESSION['emailErr']=$emailErr;
        };

        
     echo print_r ($_SESSION['emailErr']);
     $_SESSION['emailErr']=$emailErr;
    header('location:modifyAcc.php');
?>

<!-- if (!filter_var($_SESSION['email'], FILTER_VALIDATE_EMAIL)) {
    unset( $_SESSION['email'] );
//    session_destroy();
    $emailErr = ["email"=>" Invalid email format" ];
    $_SESSION['emailErr']=$emailErr;
    // header('location:login.php');
    exit();
  } -->