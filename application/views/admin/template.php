<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?= base_url('assets/templates/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/templates/dist/css/adminlte.min.css') ?>">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 bg-purple">
    <!-- Brand Logo -->
    <center>
      <a href="" class="brand-link">
        <span class="brand-text font-weight-dark">Point of Sale</span>
      </a>
    </center>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/templates/dist/img/avatar5.png')?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admininistrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
          <li class="nav-item">
            <a href="<?= base_url('admin/dashboard') ?>" class="nav-link <?= $this->uri->segment(2) == 'dashboard' ? 'active':'' ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/barang') ?>" class="nav-link <?= $this->uri->segment(2) == 'barang' ? 'active':'' ?>">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/customer') ?>" class="nav-link <?= $this->uri->segment(2) == 'customer' ? 'active':'' ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Customer
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/kategori') ?>" class="nav-link <?= $this->uri->segment(2) == 'kategori' ? 'active':'' ?>">
              <i class="nav-icon fas fa-box"></i>
              <p>
                Kategori Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/bank') ?>" class="nav-link <?= $this->uri->segment(2) == 'bank' ? 'active':'' ?>">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Bank
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/ekspedisi') ?>" class="nav-link <?= $this->uri->segment(2) == 'ekspedisi' ? 'active':'' ?>">
              <i class="nav-icon fas fa-truck"></i>
              <p>
                Ekspedisi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/transaksi') ?>" class="nav-link <?= $this->uri->segment(2) == 'transaksi' ? 'active':'' ?>">
              <i class="nav-icon fas fa-calculator"></i>
              <p>
                Transaksi Penjualan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/laporan') ?>" class="nav-link <?= $this->uri->segment(2) == 'laporan' ? 'active':'' ?>">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Laporan Penjualan
              </p>
            </a>
          </li>
          <li class="nav-header">SETTING</li>
          <li class="nav-item">
            <a href="<?= base_url('admin/admin') ?>" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Admin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/admin/toko') ?>" class="nav-link <?= $this->uri->segment(3) == 'toko' ? 'active':'' ?>">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('admin/admin/logout') ?>" class="nav-link">
              <i class="nav-icon fas fa-caret-square-left"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
            
            <?php echo $contents ?>
  
    </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-<?= date('Y') ?> <a href="">hacklim77</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?= base_url('assets/templates/plugins/jquery/jquery.min.js') ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/templates/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/templates/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= base_url('assets/templates/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/templates/plugins/datatables-responsive/js/dataTables.responsive.min.js')?>"></script>
<script src="<?= base_url('assets/templates/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/templates/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('assets/templates/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/templates/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?= base_url('assets/templates/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?= base_url('assets/templates/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?= base_url('assets/templates/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('assets/templates/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>
<script src="<?= base_url('assets/templates/plugins/datatables-buttons/js/buttons.colVis.min.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/templates/dist/js/adminlte.min.js')?>"></script>

<script>
        $(function(){
          $('#dataBarang').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });

          $('#kategori-barang').dataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });

          $('#d-customer').dataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "dom": "Bfrtip",
            "buttons": ["copy", "csv", "excel", "pdf", "print"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          
          $('#bank').dataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });

          $('#ekspedisi').dataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
          });

        });
</script>



</body>
</html>
