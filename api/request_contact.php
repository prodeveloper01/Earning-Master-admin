<?php
include('../connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
    if (strpos($uaFull, 'okhttp') !== false) {
        $method = $_POST['method'];

        if (!empty($method) && $method == "requestContact") {
            $user_id = $_POST['user_id'];
            $subject = $_POST['subject'];
            $message = $_POST['message'];
            $user_name = $_POST['user_name'];
 
            $sql = "INSERT INTO contact_support (user_id, subject, message, user_name)
                    VALUES ('$user_id', '$subject', '$message', '$user_name')";

            if (mysqli_query($conn, $sql)) {
                echo "Success";
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        } else {
            echo "Invalid Request";
        }
    } else {
        echo "Invalid Request";
    }
} else {
    echo "Invalid Request";
}
?>
