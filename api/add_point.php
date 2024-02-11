<?php
include('../connect.php');

$uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
if (strpos($uaFull, 'okhttp') !== false) {

   
    $method = $_POST['method'];
    $user_id = $_POST['user_id'];
    $add_point = $_POST['add_point'];
    $type_earn = $_POST['type_earn'];
 
    if (!empty($method) && $method == "addPointInUSer") {

        $sql = "SELECT * FROM users WHERE user_id='$user_id'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
        $sqlrefergetu = "SELECT * FROM users WHERE user_id='$user_id'";
        $resultreferuser = mysqli_query($conn, $sqlrefergetu);
        if (mysqli_num_rows($resultreferuser) > 0) {
        while ($row = mysqli_fetch_assoc($resultreferuser)) {
            $currentPoints = $row["points"];
                $newPoints = $currentPoints + $add_point;
                $updateSql = "UPDATE users SET points = $newPoints WHERE user_id='$user_id'";
                $updateResult = mysqli_query($conn, $updateSql);
                if ($updateResult) {
                    echo "Points added successfully!";
                    $sql = "INSERT INTO user_tracking(user_id, points, type_earn )
                    VALUES ('$user_id', '$add_point', '$type_earn')";

                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "Success";
                    }else {
                        echo 'error';
                    }


                } else {
                    echo "Failed to update points.";
                }
    
            echo json_encode($response);
        }
    } else {
        echo "No results found.";
    }
    
    
    
        } else {
          echo "invalid user";
        }


              
    }
} else {
    echo "invalid Request";
}
?>
