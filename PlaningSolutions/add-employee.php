<?php include('header.php'); ?>
<?php $page_active = "add-employee"; ?>

<?php include('nav.php'); ?>

<?php
// print_r($_FILES);
$departmentes = array("developer", "it", "owner" ,"manager" , "social markting" , "graphic desiger");
$error = '';
$success = '';


function upload(string $pathTo): bool
{
    if ($_FILES['image']["name"] != "default.jpg") {
        // $newFileName = uniqid() . strstr($_FILES['image']["name"], '.'); //123a2sa1da2sd.jpeg
        $newFileName = $_FILES['image']["name"]; //123a2sa1da2sd.jpeg
        $newFilePath = $pathTo . $newFileName;
        return move_uploaded_file($_FILES['image']['tmp_name'], $newFilePath);
    }
    return false;
}
?>

<?php

if (isset($_POST['submit'])) {
    $name       = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email      = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $department = filter_var($_POST['department'], FILTER_SANITIZE_STRING);
    $image      = ($_FILES['image']["name"] == "") ? "default.jpg" : $_FILES['image']["name"];
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
                    $db = new Database();
                    $sql = "INSERT INTO employees (`name`,`email`,`department` , `image` , `age` , `gender` , `startTime` ) 
                            VALUES ('$name','$email','$department', '$image' , '$age' , '$gender' , '$startTime') ";
                    $success = $db->insert($sql);
                    upload("img/");
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
            <h2 class="p-3 col text-center mt-5 text-white bg-primary"> Add New Employee </h2>
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
                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="name">age</label>
                    <input type="number" name="age" min="20" max="50" class="form-control" id="name" placeholder="Enter age">
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <br>
                    <select name="gender" id="gender" class="w-25">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                    <!-- <input type="text" name="department" class="form-control" id="department" placeholder="Enter department"> -->
                </div>
                <div class="form-group">
                    <label for="department">Department</label>
                    <br>
                    <select name="department" id="" class="w-25">
                        <?php foreach ($departmentes as $dep) : ?>
                            <option value="<?= $dep; ?>"><?= $dep; ?></option>
                        <?php endforeach ?>
                    </select>
                    <!-- <input type="text" name="department" class="form-control" id="department" placeholder="Enter department"> -->
                </div>

                <script> datePickerId.max = new Date().toISOString().split("T")[0];</script>
                <div class="form-group">
                        <label for="name">start time</label>
                        <input type="datetime-local" name="startTime"  class="form-control" id="datePickerId" placeholder="Enter startTime">
                    </div>

                <div class="form-group">
                    <label for="pic">Photo</label> <br>
                    <label for="imageFile"><img src="img/default.jpg" id="pic" alt="" style="cursor:pointer;" width="25%" class="w-25 rounded-circle"></label>
                    <input onchange="loadFile(event)" type="file" name="image" class="form-control w-25" id="imageFile" placeholder="photo">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

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