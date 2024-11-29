<?php
echo "<pre>";
require_once 'connection.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$priv = $_POST['priv'];
$gender = $_POST['gender'];
require_once 'connection.php';

$id = $_GET['id'];
$updateUser = "UPDATE users SET user_name = '$username', user_phone = '$phone', user_email = '$email', user_gender = '$gender', user_priv = '$priv', user_address = '$address' WHERE user_id = '$id'";
$query = $conn -> query($updateUser);
if($query) {
  header ("Location: ../usersTables.php");
} else {
  echo $conn -> error;
}
?>