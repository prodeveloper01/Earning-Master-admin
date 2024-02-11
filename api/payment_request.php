<?php
include('../connect.php');

$uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
if (strpos($uaFull, 'okhttp') !== false) {

    $user_id = $_POST['user_id'];
    $method = $_POST['method'];
    $payment_coin = $_POST['payment_coin'];
    $package_amount = $_POST['package_amount'];
    $payment_info = $_POST['payment_info'];
    $payment_method = $_POST['payment_method']; 
    $user_name = $_POST['user_name'];

    if (!empty($method) && $method == "UserPaymentR") {

                               // Get user refer code
            $sqlrefergetu = "SELECT * FROM users WHERE user_id='$user_id'";
            $resultreferuser = mysqli_query($conn, $sqlrefergetu);

            if (mysqli_num_rows($resultreferuser) > 0) {
            while ($row = mysqli_fetch_assoc($resultreferuser)) {
            $currentPoints = $row["points"];
            
            // Calculate the new point value
            $newPoints = $currentPoints - $payment_coin;
            
            // Update the user's points in the database
            $updateSql = "UPDATE users SET points = $newPoints WHERE user_id='$user_id'";
            $updateResult = mysqli_query($conn, $updateSql);

            if ($updateResult) {
                $sql = "INSERT INTO withdrawal(user_id, package_amount, payment_coin, payment_info , payment_method, user_name)
                VALUES ('$user_id', '$package_amount', '$payment_coin' , '$payment_info' , '$payment_method' , '$user_name')";

                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "successful";

                }else {
                    echo 'error';
                }



            }


            else {
                // Failed to update points
                echo "Failed to update points.";
            }

  
            }
            } else {
            echo "No results found.";
            }



} 


else {
   // echo 'error';
}



 
} else {
    echo "Error app!";
}
?>
