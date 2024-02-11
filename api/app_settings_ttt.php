<?php
include('../connect.php');

// Assuming you receive the email as a parameter named 'email'
$id = '1';

// Prepare the SQL query using a prepared statement
$sql = "SELECT * FROM app_settingtt WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the data from the result set
    $row = $result->fetch_assoc();

    $response = array(
    
        'king_pot_video_ads' => $row['king_pot_video_ads'],
        'pollfish_key_app' => $row['pollfish_key_app'],
        'pay_earn_rewards_point' => $row['pay_earn_rewards_point'],
        'pay_earn_video_ads' => $row['pay_earn_video_ads'],
        'ada_scratch_point' => $row['ada_scratch_point'],
        'extra_scratch_point' => $row['extra_scratch_point'],
        'gret_scratch_point' => $row['gret_scratch_point'],
        'ada_scratch_video_ads' => $row['ada_scratch_video_ads'],
        'ada_scratch_int_ads' => $row['ada_scratch_int_ads'],
        'extra_scratch_int_ads' => $row['extra_scratch_int_ads'],
        'extra_scratch_video_ads' => $row['extra_scratch_video_ads'],
        'great_scratch_point' => $row['great_scratch_point'],
        'great_scratch_video_ads' => $row['great_scratch_video_ads'],
        'great_scratch_int_ads' => $row['great_scratch_int_ads'],
        'open_rewards_point' => $row['open_rewards_point'],
        'gold_rewards_point' => $row['gold_rewards_point'],
        'king_pot_point' => $row['king_pot_point'],
        'everday_video_ads' => $row['everday_video_ads'],
        'everday_int_ads' => $row['everday_int_ads'],
        'tic_tac_point' => $row['tic_tac_point'],
        'tic_video_ads' => $row['tic_video_ads'],
        'tic_int_ads' => $row['tic_int_ads'],
        'adget_wall_id' => $row['adget_wall_id'],
        'fyber_app_id' => $row['fyber_app_id'],
        'fyber_security_key' => $row['fyber_security_key'],
        'collect_rewards_point' => $row['collect_rewards_point']

    );

    echo json_encode($response);
} else {
    // Return an empty JSON array
    echo json_encode(array());
}
 
?>
