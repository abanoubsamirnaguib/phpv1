<?php 
session_start();

 include("header.php");
 include("conData.php");
 ?>
 <din class="container">
     <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get"> 
     <h4  class="pl-3">Most 
     <input type="number" name="number" id="number">
      Ordered <button type="submit" class="btn btn-primary">Submit</button></h4>
      
      </form>
 </din>

<table class=" container table table-bordered table-hover">
    <thead class="bg-light">
        <tr>
            <th>productCode  </th>
            <th>productName </th>
            <th>quantityOrdered </th>
            <th>profit  </th>
        </tr>
    </thead>
    <tbody>
<?php 
if (isset($_GET['number'])){
 $sql = "SELECT orderdetails.productCode , products.productName,sum(orderdetails.quantityOrdered) as quantityOrdered , 
 ((sum(orderdetails.quantityOrdered))*(AVG(orderdetails.priceEach)-products.buyPrice)) as profit
  from orderdetails JOIN products
   on orderdetails.productCode= products.productCode
   GROUP BY  orderdetails.productCode
    ORDER BY sum(orderdetails.quantityOrdered) DESC limit $_GET[number]";

 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
           <tr>
            <td scope="row"><?php echo $row['productCode']?></td>
            <td scope="row"><?php echo $row['productName']?></td>
            <td><?php echo $row['quantityOrdered']?></td>    
            <td scope="row"><?php echo $row['profit']?></td>
          </tr>

<?php 
 
    }
  } else {
    echo " <h4 class='alert-danger container p-4'>0 results</h4>";
  } }
?>
</tbody>
</table>

  <?php
 include("footer.php");
?>