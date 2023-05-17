<?php
session_start();
switch ($_GET['destroy']) {
    case 'username':
        unset($_SESSION['username']);
        header('location: /');
        break;
    default:
        session_destroy();
        header('location: /');
        break;
}
