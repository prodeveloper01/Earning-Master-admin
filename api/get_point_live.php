<?php
include('../connect.php');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user points
$userID = $_POST['user_id']; // Assuming you're passing the user ID from Android
$sql = "SELECT points FROM users WHERE user_id = '$userID'";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $points = $row['points'];
    echo $points; // Return the points value to Android
} else {
    echo "User not found.";
}



?>
