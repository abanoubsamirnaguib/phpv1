<?php 
session_start();

 include("header.php");
 include("conData.php");
 ?>
  
  <div class="container w-25 mt-3">
      <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="get"> 
      <div class="form-group">
        <label for="ID_NUMBER">ID NUMBER</label>
        <input type="number" class="form-control" id="ID_NUMBER" name="id" placeholder="Enter ID">
        <small id="idHelp" class="form-text text-muted">Enter Id For Required Customer .</small>
      </div>
     
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
  
  <?php 
  if ( (isset($_GET['id']) ) ){
    $id=$_GET['id'];
    // if( is_int($id) ){ 

    //   if( is_int($_GET['id']) ){echo "ssss";} else {echo "WWWW";}
$sql = "SELECT *, customerNumber as id FROM customers where customerNumber = $_GET[id] ";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
<table class="container table table-bordered table-hover">
    <thead class="bg-light">
        <tr>
            <th>customerName </th>
            <th>customerID</th>
            <th>contactLastName</th>
            <th>contactFirstName</th>
            <th>phone </th>
            <th>addressLine1</th>
            <th>addressLine2 </th>
            <th>city</th>
            <th>state</th>
            <th>postalCode </th>
            <th>addressLine1</th>
            <th>country </th>
            <th>salesRepEmployeeNumber</th>
            <th>creditLimit</th>
        </tr>
    </thead>
    <tbody>
           <tr>
            <td scope="row"><?php echo $row['customerName']?></td>
            <td><?php echo $row['id']?></td>    
            <td><?php echo $row['contactLastName']?></td>    
            <td><?php echo $row['contactFirstName']?></td>    
            <td><?php echo $row['phone']?></td>    
            <td><?php echo $row['addressLine1']?></td>    
            <td><?php echo $row['addressLine2']?></td>    
            <td><?php echo $row['city']?></td>    
            <td><?php echo $row['state']?></td>    
            <td><?php echo $row['postalCode']?></td>    
            <td><?php echo $row['addressLine1']?></td>    
            <td><?php echo $row['country']?></td>    
            <td><?php echo $row['salesRepEmployeeNumber']?></td>    
            <td><?php echo $row['creditLimit']?></td>    
   
          </tr>
</tbody>
</table>
<?php 
    // }
    }
  } else {
    echo " <h4 class='alert-danger container p-4'>0 results</h4>  ";
  }
}
  ?>
  
 <?php
 include("footer.php");
?>