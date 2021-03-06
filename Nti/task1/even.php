<?php
if (!empty($_POST['number'])) {

    $result = "";
    if ($_POST['number'] % 2 == 0) $result = "number $_POST[number] is <span class='text-info'>even</span>";
    else {
        $result = "number $_POST[number] is  <span class='text-danger'>odd</span>";
    }
} else {
    $result = "please fill all input";
}
?>
<!doctype html>
<html lang="en">

<head>
    <title> even or odd</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <?php
    include_once("nav.php");
    ?>
    <div class="card border-primary w-50 mx-auto my-5">
        <div class="card-body text-center  mx-auto">
            <h4 class="card-title text-capitalize text-danger">even or odd </h4>
            <p class="card-text text-capitalize text-success p-2 rounded border border-success">check if the number <span class="text-info">even </span> or <span class="text-danger">odd </span> </p>
            <div class="container w-75 ">
                <form method="post" class="mx-auto ">
                    <div class="mb-3 row ">
                        <label for="inputName" class="col-sm-1-12 col-form-label"></label>
                        <div class="col-sm-1-12">
                            <input type="number" class="form-control text-center" name="number" id="number" placeholder="number">
                        </div>
                    </div>



                    <div class="mb-3 row ">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-outline-info text-capitalize">get the result</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card text-left">
                <div class="card-header">
                    <h4 class="card-title text-center text-capitalize text-success">result</h4>
                </div>
                <!-- <div class="card-body">
          <p class="card-text">Text</p>
          <p class="card-text">Text</p>
          <p class="card-text">Text</p>
        </div> -->
                <div class="card-footer text-muted text-capitalize">
                    <?= $result ?>
                </div>
            </div>
        </div>
    </div>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>