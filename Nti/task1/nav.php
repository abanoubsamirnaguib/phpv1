<?php
function active($Url)
{
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    if($Url == $curPageName){
        return "active";
    }
    return"";
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarRightAlignExample"
      aria-controls="navbarRightAlignExample"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= active("calc.php"); ?>" aria-current="page" href="calc.php">calc</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= active("elec.php"); ?>" href="elec.php">elec</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= active("even.php"); ?>" href="even.php">even</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= active("grade.php"); ?>" href="grade.php">grade</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= active("max.php"); ?>" href="max.php">max</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= active("neg-pos.php"); ?>" href="neg-pos.php">neg-pos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= active("root.php"); ?>" href="root.php">root</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>