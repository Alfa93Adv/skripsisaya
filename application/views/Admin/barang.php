<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>PR ABDI JAYA MALANG</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url();?>assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/skripsi-diabetes.css">

</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="../index.html">PR ABDI JAYA MALANG</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="HomeAdmin.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Home</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
          <a class="nav-link" href="<?php site_url('admin/barang');?>">
            <i class="fa fa-fw fa-area-chart"></i>
            <span class="nav-link-text">Barang</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="<?php site_url('admin/user');?>">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">User</span>
            </a>
          </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="penjualan.html">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text">Penjualan</span>
            </a>
          </li>
      </ul>
    </div>
  </nav>
  <!--Mencoba-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Admin</a>
        </li>
        <li class="breadcrumb-item active">Data Pengguna</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Pengguna</div>
        <div class="card-body">
        <div class="table-responsive">
        <table class="table align-items-center table-dark table-flush data">
          <thead>
            <tr class="bg-group">
              <th width="5px">Id Barang</th>
              <th>Nama Barang</th>
              <th>jumlah</th>
              <th>Harga</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $i=1;
            foreach ($barang as $key) 
            {
             ?>
             <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $key->id_barang;?></td>
              <td><?php echo $key->nama_barang;?></td>
              <td><?php echo $key->jumlah;?></td>
              <td><?php echo $key->harga;?></td>
              <td>
                <a href="<?= base_url() ?>Barang/hapus_barang/<?= $key->id_barang?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data : <?=$key->nama_barang;?> ?');"><i class="fa fa-trash"></i></span></a>
              </td>
            </tr>
            <?php
            $i++;
          }
          ?>
        </tbody>
				 <tbody>
            <?php 
            $i=1;
            foreach ($barang as $key) 
            {
             ?>
             <tr>
              <td><?php echo $i; ?></td>
              <td><?php echo $key->id_barang;?></td>
              <td><?php echo $key->nama_barang;?></td>
              <td><?php echo $key->jumlah;?></td>
              <td><?php echo $key->harga;?></td>
              <td>
                <a href="<?= base_url() ?>Barang/hapus_barang/<?= $key->id_barang?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Ingin Menghapus Data : <?=$key->nama_barang;?> ?');"><i class="fa fa-trash"></i></span></a>
              </td>
            </tr>
            <?php
            $i++;
          }
          ?>
        </tbody>
      </table>
    </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../js/sb-admin-charts.min.js"></script>
  </div>
  
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2017</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
  <!--Mencoba-->
</body>
</html>
