<?php
include('../connect.php');

// Assuming you receive the email as a parameter named 'email'
$id = '1';

// Prepare the SQL query using a prepared statement
$sql = "SELECT * FROM app_setting WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the data from the result set
    $row = $result->fetch_assoc();

    $response = array(
        'signup_bonus' => $row['signup_bonus'],
        'refer_bonus' => $row['refer_bonus'],
        'privacy_policy' => $row['privacy_policy'],
        'startapp_id' => $row['startapp_id'],
        'one_signal_app_id' => $row['one_signal_app_id'],
        'block_rooted_devices' => $row['block_rooted_devices'],
        'block_vpn_access' => $row['block_vpn_access'],
        'block_app_clone' => $row['block_app_clone'],
        'adcolony_app_id' => $row['adcolony_app_id'],
        'adcolony_reward_zone' => $row['adcolony_reward_zone'],
        'daily_check_rewards' => $row['daily_check_rewards'],
        'int_ads_count' => $row['int_ads_count'],
        'collect_rewards_ads' => $row['collect_rewards_ads'],
        'collect_int_ads' => $row['collect_int_ads'],
        'unity_game_id' => $row['unity_game_id'],
        'minas_reward_point' => $row['minas_reward_point'],
        'admob_banner_ads_id' => $row['admob_banner_ads_id'],
        'admob_video_ads_id' => $row['admob_video_ads_id'],
        'vungle_key' => $row['vungle_key'],
        'vungle_int_ads_id' => $row['vungle_int_ads_id'],
        'adcolony_int_zone_id' => $row['adcolony_int_zone_id'],
        'int_admob_ads_id' => $row['int_admob_ads_id'],
        'ironsource_app_key' => $row['ironsource_app_key'],
        'open_rewards_ads' => $row['open_rewards_ads'],
        'open_int_ads' => $row['open_int_ads'],
        'gold_video_ads' => $row['gold_video_ads'],
        'one_signal_app_id' => $row['one_signal_app_id'],
        'refer_page_text' => $row['refer_page_text']

    );

    echo json_encode($response);
} else {
    // Return an empty JSON array
    echo json_encode(array());
}
 
?>
