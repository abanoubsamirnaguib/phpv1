 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Database website</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/home.css">
    
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/Script.js"></script>
</head>
<body> 

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="home.php" style="font-family:fantasy">Abanoub Database</a>

  <div class="collapse navbar-collapse " id="navbarTogglerDemo03">
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0 ">
    <li class="nav-item ">
        <a class="nav-link" href="#">
         
         <?php 
           if (isset($_SESSION['email'])){
            echo  "Hello ".
            "<span class='text-danger'> ".
          (  (isset($_SESSION["UserName"]))?$_SESSION["UserName"]:substr( $_SESSION['email'], 0 ,strpos($_SESSION['email'],"@",0) ) )
            // .substr( $_SESSION['email'], 0 ,strpos($_SESSION['email'],"@",0) )
            // $_SESSION["UserName"]
            ."</span>" ;
          }   
          ?> 
          
        </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <?php 
           if (isset($_SESSION['email'])){
            
     ?>

      <div class="dropdown">
  <button class="btn btn-outline-secondary dropdown-toggle " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    More
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

  <ul class="ml-auto mt-2 mt-lg-0 list-group list-unstyled bg-warning">

      <li class="nav-item list-group-item-action">
        <a class="nav-link font-weight-bolder" href="biger20000.php">Bigerthan20000 </a>
      </li>

      <li class="nav-item list-group-item-action">
        <a class="nav-link font-weight-bolder" href="SearchById.php">SearchById </a>
      </li>

      <li class="nav-item list-group-item-action">
        <a class="nav-link font-weight-bolder" href="customerName.php">custmerBYName </a>
      </li>

      <li class="nav-item list-group-item-action">
        <a class="nav-link font-weight-bolder" href="customerCity.php">custmerBYCity </a>
      </li>

      <li class="nav-item list-group-item-action">
        <a class="nav-link font-weight-bolder" href="customerOrder.php">customerOrder </a>
      </li>

      <li class="nav-item list-group-item-action">
        <a class="nav-link font-weight-bolder" href="MostOrderd.php">MostOrderd </a>
      </li>

      <li class="nav-item list-group-item-action">
        <a class="nav-link font-weight-bolder" href="employ.php">employe </a>
      </li>

      
      <li class="nav-item list-group-item-action">
        <a class="nav-link font-weight-bolder" href="500-1000.php">500-5000</a>
      </li>

      <li class="nav-item list-group-item-action">
        <a class="nav-link font-weight-bolder" href="3richercity.php">Most 3 Richer </a>
      </li>

      <li class="nav-item list-group-item-action">
        <a class="nav-link font-weight-bolder" href="productCodeD.php">ProductsDetails</a>
      </li>
  </ul>
  </div>
</div>

<?php 
           }else {echo '<li class="nav-item list-group-item-action">
           <a class="nav-link font-weight-bolder" href="login.php">GEUST</a>
         </li>';};
 
?>
      <!-- <li class="nav-item">
        <a class="nav-link" href="allProducts.php">all products</a>
      </li> -->

      <li class="nav-item">
        <a class="nav-link " href="acount.php" tabindex="-1" aria-disabled="false">
        <span class="text-dark">
         <?php 
           if (isset($_SESSION['email'])){
            echo "account";
      }   else {echo 'login';}
          ?> 
     </a>
      </li>

      <li class="nav-item active">
        <a class="nav-link" href="logout.php" href="logout.php">
         <span class="text-danger">
         <?php 
           if (isset($_SESSION['email'])){
            echo " log out";
      }   
          ?> 
          </span>
        </a>
      </li>


    </ul>
  </div>

</nav>
