<?php 
session_start();

 include("header.php");
 include("conData.php");
 ?>
  
  <div class="container w-25 mt-3">
      <form id="fusionSearchForm" action="<?php echo $_SERVER["PHP_SELF"];?>" method="get"> 
      <div class="form-group">
        <label for="name">Customers Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Customer Name" 
        value="<?php echo ( (isset($_GET["name"]))? $_GET["name"]: "") ?>" >
        <small id="idHelp" class="form-text text-muted">Enter Customer Name Here .</small>
      </div>
     
      <button type="submit" class="btn btn-primary d-none" >Submit</button>

      <!-- <script>
      var timerid;
jQuery("#fusionSearchForm").keyup(function() {
  var form = this;
  clearTimeout(timerid);
  timerid = setTimeout(function() { form.submit(); }, 100);
});
      </script> -->
    </form>
  </div>

  <table class="container table table-bordered table-hover">
    <thead class="bg-light">
        <tr>
            <th>customerName </th>
        </tr>
    </thead>
    <tbody>

  <?php 
  if (isset($_GET['name'])){
    //   if( is_int($_GET['id']) ){echo "ssss";} else {echo "WWWW";}
$sql = "SELECT customerName FROM `customers` WHERE customerName like  '%$_GET[name]%'  ";
$result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
           <tr>
            <td scope="row"><?php echo $row['customerName']?></td>  
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