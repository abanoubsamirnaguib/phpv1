<?php include('header.php'); ?>
<?php include('nav.php'); ?>


<?php $row = $db->find('employees', $_GET['id']); ?>
<?php if (isset($_GET['id']) && is_numeric($_GET['id']) && $row) :  ?>


    <div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h2 class="p-3 col text-center mt-5 text-white bg-primary"> All Employees </h2>
        </div>

        <?php if ($row) : ?>

            <div class="col-sm-12">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>age</th>
                            <th>gender</th>
                            <th>start time</th>
                            <th>Department</th>
                            <th>Edit</th>
             
                        </tr>
                    </thead>
                    <tbody>


                            <tr>
                                <td>
                                    <img src="img/<?php echo ($row['image']);  ?>" id="pic" alt="image" width="50" class="rounded-circle">
                                </td>
                                <td><?php echo strtoupper($row['name']);  ?></td>
                                <td><?php echo $row['email'];  ?></td>
                                <td><?php echo ($row['age']);  ?></td>
                                <td><?php echo ($row['gender']);  ?></td>
                                <td><?php echo date_format(date_create($row['startTime']), "d-m-Y");  ?></td>
                                <td><?php echo strtoupper($row['department']);  ?></td>
             
                                <td>
                                    <a href="edit-employee.php?id=<?php echo $row['id'] ?>" class="text-primary">
                                        <i class="fa fa-pencil-square-o fa-2x"></i>
                                    </a>
                                </td>

                    


                            </tr>
                      

                    </tbody>
                </table>
            </div>

        <?php else : ?>

            <div class="col-sm-12">
                <h3 class="alert alert-danger mt-5 text-center"> Not Found Data </h3>
            </div>

        <?php endif; ?>



    </div>
</div>


<?php else : ?>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3 class="alert alert-danger mt-5 text-center"> Not Found </h3>
            </div>
        </div>
    </div>
<?php endif;  ?>


<?php include('footer.php'); ?>