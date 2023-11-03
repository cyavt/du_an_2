<?php
session_start();
include("./connect/config.php");
if (empty($_SESSION['username']) || (isset($_SESSION['username']) && !checkAdmin($_SESSION['username']))) {
    include_once("./pages/login.php");
    exit();
}
include("./layout/meta.php");
include("./layout/header.php");
?>

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->


<?php
switch ($page) {
    case null:
        include_once("./pages/home.php");
        break;
    case 'local':
        include_once("./pages/map-local.php");
        break;
    case 'detail':
        include_once("./pages/detail.php");
        break;
    default:
        die(HACKER);
        break;
}

?>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->

<?php
include("./layout/footer.php");
?>