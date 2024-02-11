<?php
include('../connect.php');

if (isset($_POST['updateProfileHEtre'])) {
    // Get form data
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $nameUser = $_POST['name'];
    $admin_url = $_POST['admin_url'];

    // Handle image uploads
    $imgs = array();
    for ($i = 1; $i <= 3; $i++) {
        if (isset($_POST["imgs$i"])) {
            $imgData = $_POST["imgs$i"];
            $name = generateRandomName(); // Function to generate a unique name for each image
            $uploadPath = "images/$name.jpg";
            $currentURL = $_SERVER['REQUEST_URI'];
            if (file_put_contents($uploadPath, base64_decode($imgData))) {
                $imgs[] = $admin_url. $uploadPath;
            }
        }
    }

    // Update data in the database
    $sql = "UPDATE users SET";
    $fields = array();

    // Add password field if not empty
    if (!empty($password)) {
        $fields[] = "password = '$password'";
    }

    // Add name field if not empty
    if (!empty($nameUser)) {
        $fields[] = "name = '$nameUser'";
    }

    // Add image field if not empty
    if (!empty($imgs)) {
        $fields[] = "image = '" . implode(",", $imgs) . "'";
    }

    // Construct the SQL query
    if (!empty($fields)) {
        $sql .= " " . implode(", ", $fields) . " WHERE user_id = '$user_id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $response['status'] = true;
        } else {
            $response['status'] = false;
        }
    } else {
        $response['status'] = false;
    }

    echo json_encode($response);
}

function generateRandomName() {
    // Generate a random name for the image file
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $name = '';
    for ($i = 0; $i < 10; $i++) {
        $name .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $name;
}
?>
