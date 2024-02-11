<?php
include('../connect.php');

$uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
if (strpos($uaFull, 'okhttp') !== false) {

   
    $method = $_POST['method'];
    $user_id = $_POST['user_id'];
    $count_work = $_POST['count_work'];
    $work_time_store = $_POST['work_time_store'];
    $cloum_count_name = $_POST['cloum_count_name'];
    $cloum_time_store = $_POST['cloum_time_store'];

    if (!empty($method) && $method == "updateWork") {   
        $updateSql = "UPDATE users SET $cloum_count_name = $count_work, $cloum_time_store = '$work_time_store' WHERE user_id='$user_id'";
        $updateResult = mysqli_query($conn, $updateSql);
        if ($updateResult) {
            if ($updateResult) {
                echo "Success";
            }else {
                echo 'error';
            }
        } else {
            echo "Failed to update points.";
        }

              
    }
} else {
    echo "invalid Request";
}
?>
