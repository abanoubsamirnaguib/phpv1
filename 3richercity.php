<?php 
session_start();

 include("header.php");
 include("conData.php");
 ?>
  
  <div class="container w-25 mt-3">
      <form id="fusionSearchForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="get"> 
      <div class="form-group">
        <label for="ID_NUMBER">Customers City</label>
        <select type="text" class="form-control" id="City" name="city" placeholder="Enter Customer City" >
       
       
  <?php 
$sql = "SELECT DISTINCT city FROM `customers` ";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>      
        <option value='<?php echo $row['city']  ?>' > <?php echo $row['city'] ?> </option>
    <?php 

    }
  } else {
    echo " <h4 class='alert-danger container p-4'>0 results</h4>  ";
  }
  ?>       
        </select>
        <small id="idHelp" class="form-text text-muted">Enter Customers city .</small>
      </div>
     
      <button type="submit" class="btn btn-primary " >Submit</button>

    </form>
  </div>

  <table class="container table table-bordered table-hover">
    <thead class="bg-light">
        <tr>
        <div class="container">Most Three Richer In  <strong> <?php echo (isset($_GET['city']))?$_GET['city']:"Reqired" ?></strong> City</div>
            <th>Customer Name </th>
            <th>credit Limit </th>
        </tr>
    </thead>
    <tbody>

  <?php 
  if (isset($_GET['city'])){
    //   if( is_int($_GET['id']) ){echo "ssss";} else {echo "WWWW";}
$sql2 = "SELECT customerName ,creditLimit  FROM `customers` WHERE city =  '$_GET[city]'
  order by creditLimit desc
    limit 3";
$result2 = $conn->query($sql2);

 if ($result2->num_rows > 0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
?>
           <tr>
            <td scope="row"><?php echo $row2['customerName']?></td>  
            <td scope="row"><?php echo $row2['creditLimit']?></td>  

          </tr>

<?php
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