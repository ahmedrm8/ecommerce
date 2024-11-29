<?php
$error = [];
if (empty($username) && empty($password)) {
  $error["fields"] = "Please check all fields";
}
if (empty($username)) {
  $error["username"] = "Please type your username";
}
if (empty($password)) {
  $error['password'] = "Please type your password";
}
?>