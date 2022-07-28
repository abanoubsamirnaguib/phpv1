<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="#">
        <img src="https://media-exp1.licdn.com/dms/image/C560BAQHi8XUfb5HCDg/company-logo_200_200/0/1628156835625?e=1666828800&v=beta&t=_vYpwzrs2q7e9xQJvzASiGJcDm4i2pK4AxKZlTw5eV0" width="75">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item  <?php if($page_active=="home"){echo "active";} ?> ">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item <?php if($page_active=="employees"){echo "active";} ?>">
            <a class="nav-link" href="employees.php">Emplyees</a>
        </li>
        <li class="nav-item <?php if($page_active=="add-employee"){echo "active";} ?>">
            <a class="nav-link" href="add-employee.php">Add Employee</a>
        </li>
        
        </ul>
    </div>
</nav>
