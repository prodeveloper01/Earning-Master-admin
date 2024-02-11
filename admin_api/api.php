<?php 
include('../connect.php');
 
 
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_GET['user_id'])) {
        $user_id = $_GET['user_id'];
        
        if (isset($_POST['_method']) && $_POST['_method'] === 'BLOCK_USER') {
            if (isset($_GET['user_id'])) {
                $user_id = $_GET['user_id'];
        
                // Sanitize and validate $user_id to prevent SQL injection
                $user_id = mysqli_real_escape_string($conn, $user_id);
                $sql = "UPDATE users SET status = 'blocked' WHERE user_id = '$user_id'";
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    // Redirect to the appropriate URL after the update
                    header("Location: ../index.php"); // Change to the appropriate URL
                    exit();
                } else {
                    // Handle query error
                    echo "Error updating user status: " . mysqli_error($conn);
                }

                echo $user_id;
            } else {
                // Handle invalid request
                header('HTTP/1.1 400 Bad Request');
                exit();
            }
        } elseif(isset($_POST['_method']) && $_POST['_method'] === 'UNBLOCK_USER'){

            //start

            if (isset($_GET['user_id'])) {
                $user_id = $_GET['user_id'];
        
                // Sanitize and validate $user_id to prevent SQL injection
                $user_id = mysqli_real_escape_string($conn, $user_id);
                $sql = "UPDATE users SET status = 'active' WHERE user_id = '$user_id'";
                $result = mysqli_query($conn, $sql);
        
                if ($result) {
                    // Redirect to the appropriate URL after the update
                    header("Location: ../index.php"); // Change to the appropriate URL
                    exit();
                } else {
                    // Handle query error
                    echo "Error updating user status: " . mysqli_error($conn);
                }

                echo $user_id;
            } else {
                // Handle invalid request
                header('HTTP/1.1 400 Bad Request');
                exit();
            }


            //end



        }elseif(isset($_POST['_method']) && $_POST['_method'] === 'USER_DATA_UPDATE'){

            //start

            $points = mysqli_real_escape_string($conn, $_POST['points']);
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $collect_count = mysqli_real_escape_string($conn, $_POST['collect_count']);
            $open_count = mysqli_real_escape_string($conn, $_POST['open_count']);
            $ada_scratch_count = mysqli_real_escape_string($conn, $_POST['ada_scratch_count']);
            $extra_scratch_count = mysqli_real_escape_string($conn, $_POST['extra_scratch_count']);
            $great_scratch_count = mysqli_real_escape_string($conn, $_POST['great_scratch_count']);
            $everday_gift_count = mysqli_real_escape_string($conn, $_POST['everday_gift_count']);
            $tic_tac_toe_count = mysqli_real_escape_string($conn, $_POST['tic_tac_toe_count']);
            $video_wall_count = mysqli_real_escape_string($conn, $_POST['video_wall_count']);
            $spin_count = mysqli_real_escape_string($conn, $_POST['spin_count']);
            
            // Update user data in the database
            $query = "UPDATE users SET points=?, name=?, phone=?, collect_count=?, open_count=?, ada_scratch_count=?, extra_scratch_count=?, great_scratch_count=?, everday_gift_count=?, tic_tac_toe_count=?, video_wall_count=?, spin_count=? WHERE user_id=?";
            $stmt = $conn->prepare($query);
            
            // Bind parameters to the prepared statement
            // "ssi" indicates that the first two parameters are strings and the last one is an integer
            $stmt->bind_param("ssssssssssssi", $points, $name,$phone,$collect_count, $open_count,$ada_scratch_count, $extra_scratch_count,$great_scratch_count,$everday_gift_count, $tic_tac_toe_count,$video_wall_count,$spin_count, $user_id);
            
            if ($stmt->execute()) {
                // Redirect to the appropriate URL after the update
                header("Location: ../user-profile.php?user_id=$user_id");
                exit();
            } else {
                // Handle query error
                echo "Error updating user information: " . $stmt->error;
            }
            
      



        }elseif(isset($_POST['_method']) && $_POST['_method'] === 'DELETE_USER'){

            //start
 
             // Construct and execute the DELETE query
            $query = "DELETE FROM users WHERE user_id='$user_id'";
            if (mysqli_query($conn, $query)) {
                // Redirect to the appropriate URL after successful deletion
             
            } else {
                // Handle query error
                echo "Error deleting record: " . mysqli_error($conn);
            }

            //end


            $queryW = "DELETE FROM withdrawal WHERE user_id='$user_id'";
            if (mysqli_query($conn, $queryW)) {
                // Redirect to the appropriate URL after successful deletion
               
            } else {
                // Handle query error
                echo "Error deleting record: " . mysqli_error($conn);
            }


       
            header("Location: ../index.php"); // Change to the appropriate URL
        



        }elseif(isset($_POST['_method']) && $_POST['_method'] === 'DELETE_USER_LIST'){

            //start
 
             // Construct and execute the DELETE query
            $query = "DELETE FROM users WHERE user_id='$user_id'";
            if (mysqli_query($conn, $query)) {
                // Redirect to the appropriate URL after successful deletion
             
            } else {
                // Handle query error
                echo "Error deleting record: " . mysqli_error($conn);
            }

            //end


            $queryW = "DELETE FROM withdrawal WHERE user_id='$user_id'";
            if (mysqli_query($conn, $queryW)) {
                // Redirect to the appropriate URL after successful deletion
               
            } else {
                // Handle query error
                echo "Error deleting record: " . mysqli_error($conn);
            }

 

            header("Location: ../all_users.php"); // Change to the appropriate URL
        



        } elseif(isset($_POST['_method']) && $_POST['_method'] === 'DELETE_PAYMENT_METHOD'){

            //start
       
            $query = "DELETE FROM payment_method WHERE id='$user_id'";
            if (mysqli_query($conn, $query)) {
                // Redirect to the appropriate URL after successful deletion
            
            } else {
                // Handle query error
                echo "Error deleting record: " . mysqli_error($conn);
            }


            //end

            $query = "DELETE FROM payment_package WHERE payment_id='$user_id'";
            if (mysqli_query($conn, $query)) {
                // Redirect to the appropriate URL after successful deletion
               
            } else {
                // Handle query error
                echo "Error deleting record: " . mysqli_error($conn);
            }

            header("Location: ../payment_method.php"); // Change to the appropriate URL
            exit();



        }elseif(isset($_POST['_method']) && $_POST['_method'] === 'DELETE_PAYMENT_PACKAGE'){

            //start
       
            $py_idd = mysqli_real_escape_string($conn, $_POST['py_idd']);
            $query = "DELETE FROM payment_package WHERE id='$user_id'";
            if (mysqli_query($conn, $query)) {
                // Redirect to the appropriate URL after successful deletion
        
                header("Location: ../payment_package.php?i=$py_idd");
                exit();
            } else {
                // Handle query error
                echo "Error deleting record: " . mysqli_error($conn);
            }


            //end



        }


        
    } else {
        // Handle invalid request
        header('HTTP/1.1 400 Bad Request');
        exit();
    }
} else {
    // Handle invalid method
    header('HTTP/1.1 405 Method Not Allowed');
    exit();
}


?>
 