<?php
require __DIR__ . '/../vendor/autoload.php';

$options = array(
    'cluster' => 'ap1',
    'useTLS' => true
);
$pusher = new Pusher\Pusher(
    '654311a90dc38cfbce19',
    '734568b5fb20fbe629d9',
    '1683350',
    $options
);
/* x-www-form-urlencoded */
header('Content-Type: application/json');
include_once('./config.php');

//var_dump($_POST);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["token"]) && isset($_POST["location"]) && isset($_POST["heart_rate"]) && isset($_POST["water_state"]) && isset($_POST["bat_cap"])) {
        $token = test_input($_POST["token"]);

        $check_token_query = "SELECT * FROM `lifebuoy_in` WHERE `token`=?";
        $stmt = $connect->prepare($check_token_query);
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $check_token_result = $stmt->get_result();

        if ($check_token_result->num_rows > 0) {
            $location = test_input($_POST["location"]);
            $heart_rate = test_input($_POST["heart_rate"]);
            $water_state = test_input($_POST["water_state"]);
            $bat_cap = test_input($_POST["bat_cap"]);

            $update_query = "UPDATE `lifebuoy_in` SET `location`=?, `heart_rate`=?, `water_state`=?, `bat_cap`=? WHERE `token`=?";
            $update_stmt = $connect->prepare($update_query);
            $update_stmt->bind_param("ssssi", $location, $heart_rate, $water_state, $bat_cap, $token);

            if ($update_stmt->execute()) {
                $response = array("code" => true, "message" => "Update successful");
                // Bắt sự kiện WebSocket
                $pusher->trigger('POSTDATA', 'update', $response);
            } else {
                $response = array("code" => false, "message" => "Error => " . $update_stmt->error) ;
            }
            $update_stmt->close();
        } else {
            $response = array("code" => false, "message" => "Không tồn tại token");
        }
        $stmt->close();
    } else {
        $response = array("code" => false, "message" => "Invalid POST data");
    }
} else {
    $response = array("code" => false, "message" => "No data posted with HTTP POST");
}
echo json_encode($response);
