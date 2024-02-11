<?php
include('../connect.php');

$uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
if (strpos($uaFull, 'okhttp') !== false) {

    $email = $_POST['email'];
    $method = $_POST['method'];
    $password = $_POST['password'];


    if (!empty($method) && $method == "userLogin") {

        $sql = "SELECT * FROM users WHERE email='$email' AND  password = $password";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            echo "Login successful!";
        } else {
            echo "Login Error!";
        
        }
    }
} else {
    echo "Login Error app!";
}
?>
