<?php
echo "<pre>";
$username = $_POST['username']; #username
$password = md5($_POST['password']); # email
$email = $_POST['email']; #password
$address = $_POST['address']; 
$phone = $_POST['phone'];
$priv = $_POST['priv'];
$gender = $_POST['gender'];

include 'connection.php';
$insertUser = "INSERT INTO users (user_name,user_pass,user_email,user_address,user_phone,user_priv,user_gender) VALUES 
( '$username', '$password', '$email', '$address', '$phone', '$priv', '$gender')";
$query = $conn -> query($insertUser);
if($query) {
  header ("Location: ../usersTables.php");
} else {
  echo $conn -> error;
}
?>