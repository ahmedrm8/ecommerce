<?php
require_once 'connection.php';
$id = $_POST['id'];
$updatemsg = "UPDATE messages SET view = 1 WHERE msg_id = '$id'";
$query = $conn -> query($updatemsg);
if($query) {
  $countmsg = "SELECT * FROM messages WHERE view = 0";
  $querymsg = $conn -> query($countmsg);
  $count = $querymsg -> num_rows;
  echo $count;
} else {

}
?>