<?php
require_once '../../sb-admin/functions/connection.php';
session_start();
$pro_id = $_GET['id'];
$user_id = $_SESSION['login_id'];
$select_cart = "SELECT * FROM cart WHERE cart_pro_id = '$pro_id'";
$queryCheck = $conn->query($select_cart)->fetch_assoc();
if ($queryCheck) {

  $insert_cart = "UPDATE cart SET count = count+1 WHERE cart_pro_id = $pro_id";
} else {

  $insert_cart = "INSERT INTO cart (cart_user_id, cart_pro_id, count) VALUES ('$user_id', '$pro_id', 1)";
}
  $query = $conn->query($insert_cart);
  if ($query) {
    header("location: ../shop.php?add=success");
  }

?>