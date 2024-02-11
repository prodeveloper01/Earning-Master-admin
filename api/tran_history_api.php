<?php
include('../connect.php');

$uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
if (strpos($uaFull, 'okhttp') !== false) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $method = isset($_POST['method']) ? $_POST['method'] : '';
        $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';


        if (!empty($method) && $method === 'getAllHistory') {
            $stmt = $conn->prepare("SELECT * FROM withdrawal WHERE user_id = '$user_id' ORDER BY id ASC");

            if ($stmt) {
                $stmt->execute();
                $result = $stmt->get_result();
                $response = array();

                while ($row = $result->fetch_assoc()) {
                    $response[] = $row;
                }

                $stmt->close();

                // Create an associative array with a "response" key
                $jsonResponse = array('response' => $response);

                echo json_encode($jsonResponse);
            } else {
                echo json_encode(array('error' => 'Failed to prepare select statement.'));
            }
        } else {
            echo json_encode(array('error' => 'Invalid Request'));
        }
    } else {
        echo json_encode(array('error' => 'Invalid Request'));
    }
} else {
    echo json_encode(array('error' => 'Invalid Request'));
}
?>
