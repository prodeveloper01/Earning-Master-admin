<?php
include('../connect.php');

// Assuming you receive the email as a parameter named 'email'
$email = $_GET['email'];

// Prepare the SQL query using a prepared statement
$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the data from the result set
    $row = $result->fetch_assoc();

    $response = array(
        'id' => $row['id'],
        'name' => $row['name'],
        'phone' => $row['phone'],
        'image' => $row['image'],
        'username' => $row['username'],
        'password' => $row['password'],
        'refer' => $row['refer'],
        'email' => $row['email'],
        'device_id' => $row['device_id'],
        'user_country' => $row['user_country'],
        'date_registered' => $row['date_registered'],
        'points' => $row['points'],
        'user_id' => $row['user_id'],
        'status' => $row['status'],
        'total_refer' => $row['total_refer'],
        'notice_badge' => $row['notice_badge'],
        'daily_date_store' => $row['daily_date_store'],
        'collect_count' => $row['collect_count'],
        'collect_leste_date' => $row['collect_leste_date'],
        'open_count' => $row['open_count'],
        'open_leste_date' => $row['open_leste_date'],
        'gold_date' => $row['gold_date'],
        'king_pot_date' => $row['king_pot_date'],
        'pay_earn_gift_date' => $row['pay_earn_gift_date'],
        'ada_scratch_count' => $row['ada_scratch_count'],
        'ada_scratch_date' => $row['ada_scratch_date'],
        'extra_scratch_count' => $row['extra_scratch_count'],
        'extra_scratch_date' => $row['extra_scratch_date'],
        'great_scratch_count' => $row['great_scratch_count'],
        'great_scratch_date' => $row['great_scratch_date'],
        'everday_gift_count' => $row['everday_gift_count'],
        'everday_gift_date' => $row['everday_gift_date'],
        'tic_tac_toe_count' => $row['tic_tac_toe_count'],
        'tic_tac_toe_date' => $row['tic_tac_toe_date'],
        'video_wall_count' => $row['video_wall_count'],
        'video_wall_date' => $row['video_wall_date'],
        'spin_count' => $row['spin_count'],
        'last_date_spin' => $row['last_date_spin']


    );

    echo json_encode($response);
} else {
    // Return an empty JSON array
    echo json_encode(array());
}
 
?>
