<?php
include('../connect.php');

$uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
if (strpos($uaFull, 'okhttp') !== false) {
  $refer_code = $_POST['refer_code'];
  $method = $_POST['method'];
  
  
    $email = $_POST['email'];
    $method = $_POST['method'];
    $password = $_POST['password'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $user_birth = $_POST['user_birth'];
    $phone = $_POST['phone'];
    $user_gander = $_POST['user_gander'];
    $UserCountry = $_POST['UserCountry'];
    $device = $_POST['device'];
    $refer = $_POST['refer'];
    $user_id = $_POST['user_id'];
    $refer_code = $_POST['refer_code'];


  if (!empty($method) && $method == "referRequest") {
   
    
    $sqlGetSetting = "SELECT * FROM app_setting WHERE id='1'";
    $resultreGetSetting = mysqli_query($conn, $sqlGetSetting);
    if (mysqli_num_rows($resultreGetSetting) > 0) {
        $settingRow = mysqli_fetch_assoc($resultreGetSetting);
        $refer_bonus = $settingRow["refer_bonus"];
    }

    $sql = "SELECT * FROM users WHERE refer='$refer_code'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {



    // Update the user's points in the database
// Prepare the update query
$updateSql = "UPDATE users SET total_refer = total_refer + 1, points = points + ? WHERE refer=?";
$updateStmt = mysqli_prepare($conn, $updateSql);

// Bind the parameters
mysqli_stmt_bind_param($updateStmt, "is", $refer_bonus, $refer_code);

// Execute the update statement
$updateResult = mysqli_stmt_execute($updateStmt);

    
    if ($updateResult) {
        // Points added successfully
    


 
        $sql = "INSERT INTO user_tracking(user_id, points, type_earn )
        VALUES ('$user_id', '$refer_bonus', 'Refer Bonus')";

        $result = mysqli_query($conn, $sql);
        if ($result) {
            
            echo "Points added successfully!";
            
            
        }else {
            echo 'error';
        }



    } else {
        // Failed to update points
        echo "Failed to update points.";
    }


    } else {
      echo "invalid refer";
    }
    
    
    
    
  } else { // server checked
    echo "invalid Request";
  }
}
?>
