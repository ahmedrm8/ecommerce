<?php
$id = $_GET['id'];
require_once 'connection.php';
$del = "DELETE FROM users WHERE user_id = '$id'";
if ($conn -> query($del)) {
  header ("location: ../usersTables.php");
}
?>