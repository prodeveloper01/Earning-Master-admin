<?php
include('../connect.php');

$uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
if (strpos($uaFull, 'okhttp') !== false) {

    $number = $_POST['number'];
    $method = $_POST['method'];
  


    if (!empty($method) && $method == "ResetPass") {

        $sql = "SELECT * FROM users WHERE phone='$number'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            echo "user successful!";
        } else {
            echo "Error!";
        
        }
    }
} else {
    echo "Login Error app!";
}
?>
