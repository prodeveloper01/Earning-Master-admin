 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php

include '../connect.php';


// Get the purchase code from user input
$purchase_code = $_POST['purchase_code'];
$company_name = $_POST['company_name'];
$code = $_POST['email'];

$ch = "Error: Could not add game details.";

// Set your Envato API key
$api_key = 'VurRlBriWZ4xgtfUlV7KlOHAv53AUCYr';

// Set the API endpoint URL
$url = 'https://api.envato.com/v3/market/author/sale?code=' . $purchase_code;

// Set the request headers
$headers = array(
    'Authorization: Bearer ' . $api_key,
);

// Initialize a cURL session and set the options
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session and get the response and HTTP status code
$response = curl_exec($ch);
$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Close the cURL session
curl_close($ch);

// Check the HTTP status code
if ($http_status == 200) {
    // If the status code is 200, the purchase code is valid
    $purchase_data = json_decode($response, true);
    // Do something with the purchase data
    // For example, you can print the item name:
  //  echo 'Item Name: ' . $purchase_data['item']['name'];
    
    // Set the data to send to the receiver API
    $data = array(
        'purchase_code' => $purchase_code,
        'company_name' => $company_name,
        'email' => $code
    );
    
    // Set the receiver API endpoint URL
    $receiver_url = 'https://testadmin.bdappit.com/code_verify/index.php';

    // Initialize a new cURL session and set the options
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $receiver_url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute the cURL session and get the response and HTTP status code
    $receiver_response = curl_exec($ch);
    $receiver_http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    // Close the cURL session
    curl_close($ch);

    // Check the HTTP status code of the receiver API response
    if ($receiver_http_status == 200) {
        // If the status code is 200, the data was successfully sent to the receiver API
       // echo 'Data sent to receiver API successfully';
         
          
echo '<script>
   setTimeout(function () { 
      swal({
 
      title: "' . $purchase_data['item']['name'] . '",
      text: "' . $purchase_code .' This Purchase code has already been used ",
     
         type: "error",
         confirmButtonText: "OK"
      },
      function(isConfirm){
         if (isConfirm) {
            window.location.href = "vf.php";
         }
      }); 
   }, 1000);
</script>';
        
        // Add the purchase code to a list of used codes
        file_put_contents('used_purchase_codes.txt', $purchase_code . "\n", FILE_APPEND);
        
          //  echo $receiver_response;
            if (strpos($receiver_response, 'status":"success') !== false) {
                // If the string is found, the response was successful
              

            
            

 
// Update data in table
$res = mysqli_query($conn, "UPDATE u_app SET email='$code',purchase_code='$purchase_code',company='$company_name',fff='1'  WHERE id='1'");

// Check if query was successful
if (!$res) {
  die("Query failed: " . mysqli_error($conn));
} else {
  echo "Data updated successfully";
  
 
 
    header('location: ../index.php');
}



// Close connection
mysqli_close($conn);                
                        
            
            } else {
                // If the string is not found, there was an error in the response
            //    echo 'Error sending data to receiver API';
            }
            

         
         
    if ($receiver_http_status == 200) {
        
 
    } else {
        // If the status code is not 200, there was an error sending the data to the receiver API
       
    }
 
    } else {
        // If the status code is not 200, there was an error sending the data to the receiver API
    //    echo 'Error sending data to receiver API';
    }
} else {
    // If the status code is not 200, the purchase code is invalid
    
    // Handle the error message
    // For example, you can print the error message:
      echo '<script>
   
       setTimeout(function () { 
                    swal({
                      title: "Not Working!",
                      text: "Envato Purchase Code is Invalid, Please use valid Purchase Code",
                      type: "error",
                      confirmButtonText: "OK"
                    },
                    function(isConfirm){
                      if (isConfirm) {
                        window.location.href = "vf.php";
                      }
                    }); }, 1000);
   
            </script>';
    
    
    
    
}
?>





 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>