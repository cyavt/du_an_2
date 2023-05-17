<?php
/* json */
error_reporting(0);
include_once('./config.php');

$data = json_decode(file_get_contents('php://input'), true);
var_dump($data);
if (isset($data)) {
    $insert = "UPDATE `post_data` SET dt='{$data["data"]}' WHERE id=1";
    if ($connect->query($insert) === TRUE) {
        echo "Success";
    } else {
        echo "Fail";
    }
}