<?php
session_start();
header('Content-Type: application/json; charset=utf-8');
require './config.php';
if (isset($_GET['key'])) :
    switch ($_GET['key']) {
        case 'login':
            $username = test_input($_POST['username']);
            $password = test_input($_POST['password']);
            $acc = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `admin` WHERE `username`='{$username}'"));
            if (!isset($acc)) {
                echo (false);
            } else if ($password != $acc['password']) {
                echo (false);
            } else {
                $_SESSION['username'] = base64_encode($username);
                echo (true);
            }
            mysqli_close($connect);
            break;
            case 'getMaps':
                $result = mysqli_query($connect, "SELECT `name`, `location`, `heart_rate`, `water_state`, `bat_cap` FROM `lifebuoy_in`");
                if (mysqli_num_rows($result) > 0) {
                        $rows = array();
                        while ($r = mysqli_fetch_assoc($result)) {
                                $rows[] = $r;
                        }
                        echo json_encode($rows);
                } else {
                        echo '{"result": "no data found"}';
                }
                mysqli_close($connect);
                break;
        default:
            require('../pages-404.php');
    }
else :
    die(HACKER);
endif;