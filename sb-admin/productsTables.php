<!-- Sidebar -->
    <?php require "components/aside.php"; ?>
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
            if (!isset($_GET['action'])) {
              include 'design/products/proTable.php';
            } else if ($_GET['action'] == 'add') {
              include 'design/products/addPro.php';
            } else if ($_GET['action'] == 'edit') {
              include 'design/products/editPro.php';
            }
            ?>

      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- End of Main Content -->
    <!-- Footer -->
    <?php require "components/footer.php"; ?>