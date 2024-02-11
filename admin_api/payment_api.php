<?php 
include('../connect.php');
 


if (isset($_POST['view_action'])) {
    $name = $_POST['view_action'];
    $up = "UPDATE `withdrawal` SET `status`= '$name' WHERE id = ".$_POST['view_id'];
    $db = mysqli_query($conn,$up);
    if ($db) {
     header("Location: ../withdrawal.php");
    }else {
      echo mysqli_error($link);
    }
}elseif (isset($_POST['r_item'])) {


  $coins = $_POST['coins'];
  $amount = $_POST['amount'];
  $r_id = $_POST['r_item'];
  $symbol = $_POST['symbol'];
  $register_user = "INSERT INTO payment_package (coins,amount,payment_id, symbol) VALUES ('$coins','$amount','$r_id', '$symbol')";
	$send_server= mysqli_query($conn,$register_user);
  if ($send_server) {
 

  header("Location: ../payment_method.php?i=" . $_POST['r_item'] . "&symbol=" .  $symbol);

  }else {
    echo mysqli_error($conn);
  }

}elseif (isset($_POST['gift_item'])) {


  $coins = $_POST['coins'];
 $amount = $_POST['amount'];
 $r_id = $_POST['gift_item'];
 $symbol = $_POST['symbol'];
 $register_user = "INSERT INTO gift_card_package (coins,amount,package_id, symbol) VALUES ('$coins','$amount','$r_id', '$symbol')";
 $send_server= mysqli_query($conn,$register_user);
 if ($send_server) {
  

 header("Location: ../gift_card_package.php?i=" . $_POST['gift_item'] . "&symbol=" . $payment_row['symbol']);
 }else {
   echo mysqli_error($conn);
 }

}



?>