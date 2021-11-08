<?php 
session_start();

 include("header.php");
 include("conData.php");
 ?>
<table class="mt-3 container table table-bordered table-hover">
    <thead class="bg-light">
        <tr>
            <th>employee </th>
            <th>Manager</th>
        </tr>
    </thead>
    <tbody>
<?php 
 $sql = "SELECT A.firstName Femployee , A.lastName Lemployee, B.firstName FManager ,B.lastName LManager
  from employees A, employees B
 WHERE A.reportsTo = B.employeeNumber";

 $result = $conn->query($sql);

 if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
?>
           <tr>
            <td scope="row"><?php echo $row['Femployee']." ".$row['Lemployee']." " ?> </td>   
            <td scope="row"><?php echo $row['FManager']." ".$row['LManager']." " ?> </td>   
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