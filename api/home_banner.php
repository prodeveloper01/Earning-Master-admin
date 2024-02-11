<?php
include('../connect.php');

if(isset($_POST['getHomeBanner'])){
    $sql_select = "SELECT * FROM home_banner WHERE `status` = '0'";
    $result = $conn->query($sql_select);
    $result_count = mysqli_num_rows($result);

    if ($result_count > 0) {
        $CategoryDetails = array();
        while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $slide_url_control = $row['slide_url_control'];
            $slide_name = $row['slide_name'];
            $image = $row['image'];
            $slide_open_url = $row['slide_open_url'];
    
            $CategoryDetails[] = array(
                "id" => $id,
                "slide_url_control" => $slide_url_control,
                "slide_name" => $slide_name,
                "image" => $image,
                "slide_open_url" => $slide_open_url
    
            );
        }

        $response = array("response" => $CategoryDetails);
        echo json_encode($response);
    } else {
        $response = array("response" => "failure");
        echo json_encode($response);
    }
}
?>
