
  <?php 
session_start();

 include("header.php");
 include("conData.php");
 ?>
  
  <div class="container w-25 mt-3">
      <form id="fusionSearchForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="get"> 
      <div class="form-group">
        <label for="name">product Code</label>
        <input type="text" class="form-control" id="name" name="code" placeholder="Enter Customer Name" 
        value="<?php echo ( (isset($_GET["code"]))? $_GET["code"]: "") ?>" >
        <small id="idHelp" class="form-text text-muted">Enter product Code Here .</small>
      </div>
     
      <button type="submit" class="btn btn-primary d-none" >Submit</button>
    </form>
  </div>

<!-- Total  -->
  <?php 
if (isset($_GET['code'])){
$sql2 = "SELECT sum(orderdetails.quantityOrdered) as sum
 FROM ((orderdetails JOIN orders on orders.orderNumber=orderdetails.orderNumber)
  JOIN customers on orders.customerNumber= customers.customerNumber) 
  WHERE productCode= '$_GET[code]'
   ORDER BY customers.creditLimit DESC  ";
$result2 = $conn->query($sql2);

 if ($result2->num_rows > 0) {
    while($row2 = $result2->fetch_assoc()) {
?>
  <div class="container card-body text-capitalize font-weight-bolder">
      number of total orderd <?php echo $row2['sum'] ?>
  </div>
<?php 
     }
    } 
  }
?>

<!-- the table -->
  <table class="container table table-bordered table-hover">
    <thead class="bg-light">
        <tr>
            <th>product Code </th>
            <th>quantity Ordered </th>
            <th>order Number </th>
            <th>customer Name </th>
            <th>credit Limit </th>
        </tr>
    </thead>
    <tbody>

  <?php 
  if (isset($_GET['code'])){
$sql = "SELECT orderdetails.productCode , orderdetails.quantityOrdered , orders.orderNumber,
customers.customerName ,customers.creditLimit 
 FROM ((orderdetails JOIN orders on orders.orderNumber=orderdetails.orderNumber)
  JOIN customers on orders.customerNumber= customers.customerNumber) 
  WHERE productCode= '$_GET[code]'
   ORDER BY customers.creditLimit DESC  ";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
           <tr>
            <td scope="row"><?php echo $row['productCode']?></td>  
            <td scope="row"><?php echo $row['quantityOrdered']?></td>  
            <td scope="row"><?php echo $row['orderNumber']?></td>  
            <td scope="row"><?php echo $row['customerName']?></td>  
            <td scope="row"><?php echo $row['creditLimit']?></td> 
          </tr>

<?php 
// echo $row['sum'];, sum(orderdetails.quantityOrdered) as sum
    }
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
