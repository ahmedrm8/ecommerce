<?php require_once "headPage.php" ?>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Dashboard</div>
  </a>
  <!-- Divider -->
  <hr class="sidebar-divider my-0" />
  <!-- Nav Item - Dashboard -->
  <li class="nav-item <?= $action == 'index' ? 'active':'' ?>">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider" />
  <!-- Heading -->
  <div class="sidebar-heading">tables</div>
  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item <?= $action == 'productsTables' ? 'active':'' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-table"></i>
      <span>Products</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Products:</h6>
        <a class="collapse-item" href="productsTables.php">View Products</a>
        <a class="collapse-item" href="productsTables.php?action=add">New Products</a>
      </div>
    </div>
  </li>
  <li class="nav-item <?= $action == 'messages' ? 'active':'' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-table"></i>
      <span>Messages</span>
    </a>
    <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Messages:</h6>
        <a class="collapse-item" href="messages.php">View Messages</a>
      </div>
    </div>
  </li>
  <!-- Nav Item - Utilities Collapse Menu -->
  <li class="nav-item <?= $action == 'usersTables' ? 'active':'' ?>">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-table"></i>
      <span>Users</span>
    </a>
    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Custom Users:</h6>
        <a class="collapse-item" href="usersTables.php">View Users</a>
        <a class="collapse-item" href="usersTables.php?action=add">New Users</a>
      </div>
    </div>
  </li>
  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />
  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>