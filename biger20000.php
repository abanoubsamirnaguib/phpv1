<?php 
session_start();

 include("header.php");
 include("conData.php");
 ?>
<table class="mt-3 container table table-bordered table-hover">
    <thead class="bg-light">
        <tr>
            <th>customerName </th>
            <th>creditLimit</th>
        </tr>
    </thead>
    <tbody>
<?php 
 $sql = "SELECT customerName, creditLimit FROM customers where creditLimit >20000 ";
 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
           <tr>
            <td scope="row"><?php echo $row['customerName']?></td>
            <td><?php echo $row['creditLimit']?></td>    
          </tr>

<?php 
 
    }
  } else {
    echo "0 results";
  }
?>
           <tr>
            <td scope="row" class="bg-info"> <strong>Number Of Customers </strong> </td>
            <td class="bg-info">
            <?php
             $sql2 = "SELECT count(customerName) as num FROM customers where creditLimit >20000" ;
             $result2 = $conn->query($sql2);
             while($row2 = $result2->fetch_assoc()) {
                echo   $row2['num'];
            }
            ?>
            <strong> Customers </strong> 
            </td>    
          </tr>
</tbody>
</table>

  <?php
 include("footer.php");
?>