<?php
session_start();
require_once 'connection.php';
$id = $_GET['id'];
$update_user = "UPDATE users SET user_status = 0 WHERE user_id = '$id'";
$query = $conn -> query($update_user);

if ($query) {
session_unset();
session_destroy();
header ("location: ../login.php");
}
?>