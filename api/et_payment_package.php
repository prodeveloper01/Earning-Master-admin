<?php
include('../connect.php');

$uaFull = strtolower($_SERVER['HTTP_USER_AGENT']);
if (strpos($uaFull, 'okhttp') !== false) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $method = isset($_POST['method']) ? $_POST['method'] : '';
        $payment_id = isset($_POST['payment_id']) ? $_POST['payment_id'] : '';

        if (!empty($method) && $method === 'getPaymentPackage') {
            $stmt = $conn->prepare("SELECT * FROM payment_package WHERE payment_id = '$payment_id' ORDER BY id ASC");

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
