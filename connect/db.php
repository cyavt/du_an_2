<?php
/* DATABASE */
define('HACKER', 'Lỗi không thể truy cập đường dẫn này !');
define('ADMIN', 'admin');
define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DATABASE', 'du_an_2023');
$connect = new mysqli(SERVERNAME, USERNAME, PASSWORD, DATABASE);
if ($connect->connect_error) {
    die("Không thể kết nối");
    exit();
}