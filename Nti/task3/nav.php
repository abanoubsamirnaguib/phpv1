<?php
function active(string $Url): string
{
  $curPageName = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
  if ($Url == $curPageName) {
    return "active";
  }
  return "";
}
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarRightAlignExample" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarRightAlignExample">
      <!-- Left links -->
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?= active("Bank.php"); ?>" href="/Nti/task3/bank/Bank.php">Bank</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= active("Subscribe.php"); ?>" href="/Nti/task3/club/Subscribe.php">club</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= active("Number.php"); ?>" href="/Nti/task3/hospital/Number.php">hospital</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= active("Supermarket.php"); ?>" href="/Nti/task3/supermarket/Supermarket.php">supermarket</a>
        </li>

      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>