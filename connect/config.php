<?php
/* DATABASE */
/* define('HACKER', 'Lỗi không thể truy cập đường dẫn này !');
define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'du_an_2023');
$connect = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
if ($connect->connect_error) {
    die("Không thể kết nối");
    exit();
}
mysqli_set_charset($connect, "utf8");
date_default_timezone_set('Asia/Ho_Chi_Minh');
$datetime = date('Y-m-d H:i:s');
 */
/* MAP */
$config = array(
    'KEYMAPAPI' => 'AIzaSyBH6z9pLP8iIZWzfXFBV_XUjrAY27Vo2XM',
    'TOADOTRUNGTAM' => '16.0765639, 108.2143147',
    'ZOOM' => '16'
);

/* TITLE */
$value_uri = substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
$title = "Hệ thống quản lý phao cứu hộ";
switch ($value_uri) {
    case 'index.php':
        $h4 = "Tổng quan";
        $title =  $h4 . " | " . $title;
        break;
    case 'map-local.php':
        $h4 = "Vị trí";
        $title =  $h4 . " | " . $title;
        break;
    default:
        $title = "ERROR | " . $title;
        break;
}

/* LOGO */
$logo = array(
    'home' => 'assets\images\favicon.ico',
    'logo-sm' => ['https://iilab.tech/images/LOGO-N.png','30'],
    'logo-light' => ['https://iilab.tech/images/ILab.png','60'],
    'avatar' => 'https://png.pngtree.com/png-vector/20191125/ourmid/pngtree-beautiful-admin-roles-line-vector-icon-png-image_2035379.jpg'
);
