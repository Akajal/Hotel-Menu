<?php
include 'db.php'; 
?>
<?php
include 'header.php'; 
?>


<body id="add_menu-page">
  <!-- Page Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <li class="nav-item">
        <a class="nav-link" href="./index.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Admin</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="menu.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Oder Management</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="item.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Item Management</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="order_received.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Order Received</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="add_menu.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Add Item</span></a>
      </li>
    </ul>
    <ul class="mt100">
      <form action="addAction.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="item">Item:</label>
          <input type="text" class="form-control" id="item" name="item">
        </div>
        <div class="form-group">
          <label for="type">Item Type:</label>
          <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="form-group">
          <label for="price">Price:</label>
          <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group">
          <label for="image">Image:</label>
          <input type="file" class="form-control" id="image" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="mr-2 d-none d-lg-inline text-gray-600 small">user</span>
          <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="profile.php">
            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
            Profile
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>
    </ul>
  </div>
  <!-- End of Page Wrapper -->
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>
</body>