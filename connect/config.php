<?php
/* HIDE ERROR */
error_reporting(0);

/* DATABASE */
include_once("db.php");

/* SECURITY */
function checkAdmin($session)
{
    if (!isset($session)) {
        return false;
    }
    if ($session !== base64_encode(ADMIN)) {
        return false;
    }
    return true;
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

/* SET TIME */
mysqli_set_charset($connect, "utf8");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$datetime = date('Y-m-d H:i:s');

/* MAP AIzaSyBH6z9pLP8iIZWzfXFBV_XUjrAY27Vo2XM */
$config = array(
    'KEYMAPAPI' => 'AIzaSyAI9kPkskayYti5ttrZL_UfBlL3OkMEbvs',
    'TOADOTRUNGTAM' => '16.0818292, 108.2248840',
    'ZOOM' => '16'
);

/* TITLE */
$title = "Hệ thống quản lý phao cứu hộ";
switch ($_GET["page"]) {
    case null:
        $h4 = "Tổng quan";
        $title =  $h4 . " | " . $title;
        break;
    case "local":
        $h4 = "Vị trí";
        $title =  $h4 . " | " . $title;
        break;
    case "detail":
        $h4 = "Thông tin chi tiết";
        $title =  $h4 . " | " . $title;
        break;
    default:
        $title = "ERROR | " . $title;
        break;
}

/* LOGO */
$logo = array(
    'home' => 'assets\images\favicon.ico',
    'logo-sm' => ['/assets/images/icon-iilab.png', '45'],
    'logo-light' => ['/assets/images/iilab_2.png', '70'],
    'avatar' => 'https://png.pngtree.com/png-vector/20191125/ourmid/pngtree-beautiful-admin-roles-line-vector-icon-png-image_2035379.jpg'
);
