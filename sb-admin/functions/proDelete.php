<?php
$id = $_GET['id'];
require_once 'connection.php';
$del = "DELETE FROM products WHERE pro_id = '$id'";
if ($conn -> query($del)) {
  header ("location: ../productsTables.php");
}
?>