<?php

    include 'connect.php' ;
    
	$phone='0';
    $query = "SELECT * FROM u_app WHERE fff = '$phone'";
    $result = mysqli_query($conn, $query);
    
   
 

?>