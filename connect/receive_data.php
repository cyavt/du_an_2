<?php
error_reporting(0);
include_once('./config.php');
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $json = test_input($_POST["json"]);
    if($json == 1){
        $data = json_decode(file_get_contents('php://input'), true);
        var_dump($data);
        if(isset($data)){
            $insert = "UPDATE `post_data` SET dt='{$data["data"]}' WHERE id=1";
            if ($connect->query($insert) === TRUE) {
            echo "Success";
            } else {
            echo "Fail";
            }
        }
    }else{
        $token = test_input($_POST["token"]);
        $check_token = mysqli_fetch_array(mysqli_query($connect, "SELECT * FROM `lifebuoy_in` WHERE `token`='{$token}'"));
        if (isset($check_token)) {
            $location = test_input($_POST["location"]);
            $heart_rate = test_input($_POST["heart_rate"]);
            $water_state = test_input($_POST["water_state"]);
            $bat_cap = test_input($_POST["bat_cap"]);
            $update = "UPDATE `lifebuoy_in` SET `location`='$location',`heart_rate`='$heart_rate',`water_state`='$water_state' WHERE `token`='$token'";
            if ($connect->query($update) === FALSE) {
                echo "Error:" . $connect->error;
            }
            $connect->close();
        } else {
            echo ('Không tồn tại token');
        }
    }

    
} else {
    echo "No data posted with HTTP POST.";
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


