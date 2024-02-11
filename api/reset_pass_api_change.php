<?php
include('../connect.php');

$uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
if (strpos($uaFull, 'okhttp') !== false) {

    $number = $_POST['number'];
    $method = $_POST['method'];
    $password = $_POST['password'];

    if (!empty($method) && $method == "passUpdate") {
        // Sanitize input values
    

        // Construct the SQL query
        $sql = "UPDATE users SET password = '$password' WHERE phone = '$number'";
         $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
           echo "Error!";
        } else {
           
          echo "successful dd";
        }
    }
} else {
    echo "Login Error app!";
}
?>
