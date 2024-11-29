<?php
  session_start();
  $action = basename($_SERVER['PHP_SELF'], '.php');
  if ($action == 'login' || $action == 'register') {
    if (isset($_SESSION['login_id'])) {
      header('location: index.php');
    }
  } else {
    if (!isset($_SESSION['login_id'])) {
      header('location: login.php');
    }
  }
require_once "functions/connection.php";
$source_table = '
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
';
if ($action == 'login') {
  require_once "functions/errors.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>
  <?= $action == 'productsTables' ? 'Products Tables':'' ?>
  <?= $action == 'index' ? 'Dashboard':'' ?>
  <?= $action == 'usersTables' ? 'Users Tables':'' ?>
  <?= $action == 'login' ? 'Log In':'' ?>
  <?= $action == 'register' ? 'Register':'' ?>
  </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet" />
  <!-- Custom styles for this template-->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  <?= $action == 'productsTables' || $action == 'usersTables' ? '<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">' : ' '; ?>
</head>