<?php
/* DATABASE */
define('HACKER', 'Lỗi không thể truy cập đường dẫn này !');
define('ADMIN', 'admin');
define('SERVERNAME', 'localhost');
define('USERNAME', 'fxmwsmti_base');
define('PASSWORD', 'fxmwsmti_base');
define('DATABASE', 'fxmwsmti_base');
$connect = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
if ($connect->connect_error) {
    die("Không thể kết nối");
    exit();
}