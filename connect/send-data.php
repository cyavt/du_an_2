<?php
session_start();
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
            $result = mysqli_query($connect, "SELECT `name`, `location` , `water_state` FROM `lifebuoy_in`");
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
        case 'warning':
            $result = mysqli_query($connect, "SELECT `id`, `name` , `water_state` FROM `lifebuoy_in`");
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
        case 'getList':
            $result = mysqli_query($connect, "SELECT l.*, s.status, s.color
                                                    FROM lifebuoy_in as l
                                                    JOIN state as s ON l.water_state = s.id
                                                    ORDER BY water_state DESC");
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
        case 'general':

            // Tổng số phao hiện có
            $query_total_phao = "SELECT COUNT(*) AS total_phao FROM lifebuoy_in";
            $result_total_phao = mysqli_query($connect, $query_total_phao);
            $total_phao = mysqli_fetch_assoc($result_total_phao);

            // Số phao đang hoạt động (water_state khác 1)
            $query_active_phao = "SELECT COUNT(*) AS active_phao FROM lifebuoy_in WHERE water_state <> 1";
            $result_active_phao = mysqli_query($connect, $query_active_phao);
            $active_phao = mysqli_fetch_assoc($result_active_phao);

            // Trạng thái cảnh báo (water_state = 4)
            $query_warning = "SELECT * FROM lifebuoy_in WHERE water_state = 4";
            $result_warning = mysqli_query($connect, $query_warning);
            $warning_data = array();
            if (mysqli_num_rows($result_warning) > 0) {
                while ($row = mysqli_fetch_assoc($result_warning)) {
                    $warning_data[] = $row;
                }
            }

            // Dung lượng pin thấp (bat_cap <= 25)
            $query_low_battery = "SELECT * FROM lifebuoy_in WHERE bat_cap <= 25";
            $result_low_battery = mysqli_query($connect, $query_low_battery);
            $low_battery_data = array();
            if (mysqli_num_rows($result_low_battery) > 0) {
                while ($row = mysqli_fetch_assoc($result_low_battery)) {
                    $low_battery_data[] = $row;
                }
            }

            $response = array(
                'total_phao' => $total_phao,
                'active_phao' => $active_phao,
                'warning_data' => $warning_data,
                'low_battery_data' => $low_battery_data
            );

            echo json_encode($response);

            mysqli_close($connect);

            break;
        default:
            require('../pages-404.php');
            break;
    }
else :
    die(HACKER);
endif;
