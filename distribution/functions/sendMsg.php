<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$msg = $_POST['message'];

require_once "../../sb-admin/functions/connection.php";
$insertMsg = "INSERT INTO messages (msg_fname, msg_lname, msg_email, msg_phone, msg_msge) VALUES 
( '$firstName', '$lastName', '$email', '$phone', '$msg')";
$query = $conn -> query($insertMsg);
if($query) {
  echo"<div class='alert alert-success'>Message sent successfully</div>";
} else {
  echo $conn -> error;
}
?>