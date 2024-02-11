 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

<?php
 
 
include '../connect.php';



	$phone='3';


    $query = "SELECT * FROM u_app WHERE fff = '$phone'";
    $result = mysqli_query($conn, $query);
    
    if (mysqli_num_rows($result) > 0) {
        echo "Password  ";
   $response = array(
    'status' => true,
    'message' => 'aaa successful'
);

 
     
     
     
      echo "  successfully.";
    } else {
      // User with the specified email does not exist
      // Add code here to handle error or notify user
        echo '<script>
   
       setTimeout(function () { 
                                swal({
                                  title: "Done!",
                                  text: "Game Details Added Successfully!",
                                  type: "success",
                                  confirmButtonText: "OK"
                                },
                                function(isConfirm){
                                  if (isConfirm) {
                                    window.location.href = "list_of_game.php";
                                  }
                                }); }, 1000);
   
            </script>';
            
       
            
            
    }   
   
    
    
     echo '<script>
   
       setTimeout(function () { 
                    swal({
                      title: "Oops!",
                      text: "Something went wrong!",
                      type: "error",
                      confirmButtonText: "OK"
                    },
                    function(isConfirm){
                      if (isConfirm) {
                        window.location.href = "add_game.php";
                      }
                    }); }, 1000);
   
            </script>';
    
    

?>


 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>

 