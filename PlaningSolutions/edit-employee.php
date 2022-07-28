<?php include('header.php'); ?>
<?php include('nav.php'); ?>


<?php $row = $db->find('employees', $_GET['id']); ?>
<?php if (isset($_GET['id']) && is_numeric($_GET['id']) && $row) :  ?>

    <?php
    // print_r($_FILES);
    $departmentes = array("developer", "it", "owner" ,"manager" , "social markting" , "graphic desiger");
    $error = '';
    $success = '';

    function upload(string $pathTo, string $Photo): bool
    {
        if ($_FILES['image']["name"] == "default.jpg") {
            die("hello");
        }
        if ($_FILES['image']["name"] != "default.jpg" && $_FILES['image']["name"] != $Photo && $_FILES['image']["name"] != "" ) {
            // $newFileName = uniqid() . strstr($_FILES['image']["name"], '.');
            $newFileName = $_FILES['image']["name"];
            $newFilePath = $pathTo . $newFileName;
            move_uploaded_file($_FILES['image']['tmp_name'], $newFilePath);
            if ($Photo != "default.jpg") {
                // unlink("img/" . $row['image']); 
                unlink("img/" . $Photo);
                return true;
            }
            return false;
        }
        return false;
    }
    ?>


    <?php

    if (isset($_POST['submit'])) {
        $name       = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email      = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $department = $_POST['department'];
        $image      = ($_FILES['image']["name"] == "") ? $row["image"] : $_FILES['image']["name"];
        $age      = $_POST['age'];
        $gender      = $_POST['gender'];
        $startTime      = ($_POST['startTime']);

        if (empty($name) or empty($email) or empty($department)) {
            $error = "Please Fill All Fields";
        } else {
            if (strlen($name) > 3) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $department = strtolower($department);
                    if (in_array($department, $departmentes)) {

                        $sql = "UPDATE employees SET `name`='$name',`email`='$email',`department`='$department',
                        `age`='$age' , `gender`='$gender' , `startTime`='$startTime' ,
                            `image`='$image' WHERE `id`='$row[id]' ";
                        $success = $db->update($sql);
                        upload("img/", $row['image']);
                        header('location:employees.php');
                    } else {
                        $error = "This Department Not Found ";
                    }
                } else {
                    $error = "Please Type Valid Email";
                }
            } else {
                $error = "name Must be Grater Than 3 chars !";
            }
        }
    }

    ?>


    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="p-3 col text-center mt-5 text-white bg-primary"> Edit Employee </h2>
            </div>

            <div class="col-sm-12">
                <?php if ($error != '') : ?>
                    <h2 class="p-2 col text-center mt-5  alert alert-danger"> <?php echo $error; ?> </h2>
                <?php endif; ?>

                <?php if ($success != '') : ?>
                    <h2 class="p-2 col text-center mt-5  alert alert-success"> <?php echo $success; ?> </h2>
                <?php endif; ?>
            </div>
            <div class="col-sm-12">
                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control" id="name" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="name">age</label>
                        <input type="number" min="20" max="50" name="age" value="<?php echo $row['age']; ?>" class="form-control" id="name" placeholder="Enter age">
                    </div>

                    <div class="form-group">
                        <label for="department">Gender</label>
                        <br>
                        <select name="gender" id="" class="w-25">
                            <option value="male" <?= ($row['gender'] == "male") ? "selected" : "" ?>>male</option>
                            <option value="female" <?= ($row['gender'] == "female") ? "selected" : "" ?>>female</option>
                        </select>
                        <!-- <input type="text" name="department" class="form-control" id="department" placeholder="Enter department"> -->
                    </div>

                    <div class="form-group">
                        <label for="department">Department</label>
                        <br>
                        <select name="department" id="" class="w-25">
                            <?php foreach ($departmentes as $dep) : ?>
                                <option value="<?= $dep; ?>" <?= ($row['department'] == $dep) ? "selected" : "" ?>><?= $dep; ?></option>
                            <?php endforeach ?>
                        </select>
                        <!-- <input type="text" name="department" class="form-control" id="department" placeholder="Enter department"> -->
                    </div>

                    <div class="form-group">
                        <label for="name">start time</label>
                        <input type="datetime-local" name="startTime" value="<?php echo $row['startTime']; ?>" class="form-control" id="name" placeholder="Enter startTime">
                    </div>

                    <div class="form-group">
                        <label for="pic">Photo</label> <br>
                        <label for="imageFile"><img src="img/<?= $row['image']; ?>" id="pic" alt="" style="cursor:pointer; max-width:50%" class=" rounded-circle"></label>
                        <input onchange="loadFile(event)" type="file" name="image" class="form-control w-25" id="imageFile" placeholder="photo">
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
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

<script>
    var loadFile = function(event) {
        var output = document.getElementById('pic');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>

<?php include('footer.php'); ?>