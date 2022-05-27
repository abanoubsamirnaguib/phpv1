<?php 
session_start();

 include("header.php");
 include("conData.php");
 ?>
<table class="mt-3 container table table-bordered table-hover">
    <thead class="bg-light">
        <tr>
            <th>customerNumber </th>
            <th>customerName</th>
            <th>Number of Orders </th>
            <th>city</th>
        </tr>
    </thead>
    <tbody>
<?php 
 $sql = "SELECT 
  orders.customerNumber, customers.customerName ,
  count(orders.orderNumber) as orderNumber , customers.city
 from orders JOIN customers
    on orders.customerNumber= customers.customerNumber
 GROUP BY customers.customerName
 ORDER BY count(orders.orderNumber) DESC";

 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
           <tr>
            <td scope="row"><?php echo $row['customerNumber']?></td>
            <td><?php echo $row['customerName']?></td>    
            <td scope="row"><?php echo $row['orderNumber']?></td>
            <td><?php echo $row['city']?></td>    
          </tr>

<?php 
 
    }
  } else {
    echo " <h4 class='alert-danger container p-4'>0 results</h4>";
  }
?>
</tbody>
</table>

  <?php
 include("footer.php");
?>