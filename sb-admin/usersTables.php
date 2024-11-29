<!-- Sidebar -->
<?php 
require "components/aside.php"; 
?>
<!-- End of Sidebar -->
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
  <div id="content">
  <!-- Topbar -->
  <?php require "components/navbar.php"; ?>
  <!-- End of Topbar -->
  <!-- Begin Page Content -->
    <div class="container-fluid">
      <!-- Page Heading -->
      
      <?php
          if(!isset($_GET['action'])) {
            include 'design/userTable.php';
          } elseif ($_GET['action'] == 'add') {
            include 'design/addUser.php';
          } elseif ($_GET['action'] == 'edit') {
            include 'design/editUser.php';
          }
        ?>
    <!-- /.container-fluid -->
  </div>
  <!-- End of Main Content -->
  <!-- Footer -->
  <?php require "components/footer.php"; ?>