<?php
include('../connect.php');

// Assuming you receive the email as a parameter named 'email'
$id = '1';

// Prepare the SQL query using a prepared statement
$sql = "SELECT * FROM app_settingte WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the data from the result set
    $row = $result->fetch_assoc();

    $response = array(

        'vi_applovin_reward' => $row['vi_applovin_reward'],
        'vi_adcolony_reward' => $row['vi_adcolony_reward'],
        'vi_admob_reward' => $row['vi_admob_reward'],
        'vi_startapp_reward' => $row['vi_startapp_reward'],
        'vi_facebook_reward' => $row['vi_facebook_reward'],
        'spin_video_ads' => $row['spin_video_ads'],
        'spin_int_ads' => $row['spin_int_ads'],
        'spin_count_ava' => $row['spin_count_ava'],
        'tic_tac_toe_count_ava' => $row['tic_tac_toe_count_ava'],
        'collect_count_ava' => $row['collect_count_ava'],
        'open_count_ava' => $row['open_count_ava'],
        'eve_count_ava' => $row['eve_count_ava'],
        'ads_scratch_count_ava' => $row['ads_scratch_count_ava'],
        'ex_scratch_count_ava' => $row['ex_scratch_count_ava'],
        'gr_scratch_count_ava' => $row['gr_scratch_count_ava'],
        'vi_vugnle_reward' => $row['vi_vugnle_reward'],
        'vi_unity_reward' => $row['vi_unity_reward'],
        'video_wall_ava' => $row['video_wall_ava']

    );

    echo json_encode($response);
} else {
    // Return an empty JSON array
    echo json_encode(array());
}
 
?>
