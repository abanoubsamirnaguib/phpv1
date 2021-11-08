<?php 
session_start();

 include("header.php");
 include("conData.php");
 ?>
  
  <div class="container w-25 mt-3">
      <form id="fusionSearchForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="get"> 
      <div class="form-group">
        <label for="NUMBER">Products Ordered </label>
        <input type="number" class="form-control" id="NUMBER" name="number" placeholder="Enter number " min="500" max="5000" 
        value="<?php echo ( (isset($_GET["number"]))? $_GET["number"]: "") ?>" >
        <small id="idHelp" class="form-text text-muted">Enter number between 500 to 5000.</small>
      </div>
     
      <button type="submit" class="btn btn-primary " >Submit</button>
    </form>
  </div>

  <table class="container table table-bordered table-hover">
    <thead class="bg-light">
        <tr>
            <th>Products Name </th>
            <th>quantity In Stock </th>

        </tr>
    </thead>
    <tbody>

  <?php 
  if (isset($_GET['number'])) {
    $num=$_GET['number'];
    echo gettype( intval($num) );
    if (is_integer( intval($num) )){
$sql = "SELECT productName ,quantityInStock FROM `products`
 WHERE  quantityInStock >= '$_GET[number]'
 order by quantityInStock desc ";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
           <tr>
            <td scope="row"><?php echo $row['productName']?></td>  
            <td scope="row"><?php echo $row['quantityInStock']?></td>  

          </tr>

<?php 
  } }
  } else {
    echo " <h4 class='alert-danger container p-4'>0 results</h4>  ";
  }
}
  ?>
  </tbody>
</table>
 <?php
 include("footer.php");
?>