<?php
session_start();
header('Content-Type: application/json');
require './config.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') :
    if (isset($_POST['username']) && isset($_POST['password'])) {

        $query = "SELECT * FROM `admin` WHERE `username` = ?";
        $stmt = mysqli_prepare($connect, $query);

        $username = test_input($_POST['username']);
        $password = test_input($_POST['password']);

        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $acc = mysqli_fetch_assoc($result);
            $accVerify = password_hash($acc['password'], PASSWORD_DEFAULT);

            if (password_verify($password, $accVerify)) {
                $_SESSION['username'] = base64_encode($username);
                $response = array("code" => true, "message" => "Đăng nhập thành công !");
            } else {
                $response = array("code" => false, "message" => "Đăng nhập thất bại !");
            }
        } else {
            $response = array("code" => false, "message" => "Đăng nhập thất bại !");
        }

        mysqli_stmt_close($stmt);
        mysqli_close($connect);
    } else {
        $response = array("code" => false, "message" => "Not found data");
    }
else :
    $response = array("code" => false, "message" => "No POST");
endif;

echo json_encode($response);
