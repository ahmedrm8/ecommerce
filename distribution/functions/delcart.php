<?php
$id = $_GET['id'];
require_once '../../sb-admin/functions/connection.php';
$del = "DELETE FROM cart WHERE cart_id = '$id'";
if ($conn -> query($del)) {
  header ("location: ../cart.php");
}
?>