<?php
$username = $_POST['username'];
$password = md5($_POST['password']);
require_once 'connection.php';
$selectLogin ="SELECT * FROM users WHERE user_name = '$username' AND user_pass = '$password'";
$queryLogin = $conn -> query($selectLogin);
$user = $queryLogin -> fetch_assoc();
$id = $user['user_id'];
$priv = $user['user_priv'];
$username = $user['user_name'];
if ($queryLogin -> num_rows > 0 && $priv < 3) {
  session_start();
  $_SESSION['login_id'] = $id;
  $_SESSION['priv'] = $priv;
  $_SESSION['login_username'] = $username;
  $update_user = "UPDATE users SET user_status = 1 WHERE user_id = '$id'";
  $query = $conn -> query($update_user);
  header ("Location: ../index.php");
} else {
  header ("Location: ../login.php");

}
if ($queryLogin -> num_rows > 0 && $priv > 2) {
  session_start();
  $_SESSION['login_id'] = $id;
  $_SESSION['priv'] = $priv;
  $_SESSION['login_username'] = $username;
  header ("Location: ../../distribution/index.php");
}
?>