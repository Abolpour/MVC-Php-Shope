
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href=<?php Load("plugins/fontawesome-free/css/all.min.css")?>>
  <!-- DataTables -->
  <link rel="stylesheet" href=<?php Load("plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")?>>
  <link rel="stylesheet" href=<?php Load("plugins/datatables-responsive/css/responsive.bootstrap4.min.css")?>>
  <link rel="stylesheet" href=<?php Load("plugins/datatables-buttons/css/buttons.bootstrap4.min.css")?>>
  <!-- Theme style -->
  <link rel="stylesheet" href=<?php Load("dist/css/adminlte.min.css")?>>
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
      <li class="nav-item d-none d-sm-inline-block">
        <a href="../../index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
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

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    
    <a href="#" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <div class="input-group-append">
            
              
                     </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
           
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="?name=Adminlist&info=products" class=<?php if($info=='products' ) {echo '"nav-link active"';} else {echo '"nav-link"';} ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>products</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?name=Adminlist&info=category" class=<?php if($info=='category' ) {echo '"nav-link active"';} else {echo '"nav-link"';} ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?name=Adminlist&info=shops" class=<?php if($info=='shops' ) {echo '"nav-link active"';} else {echo '"nav-link"';} ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>shops</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="?name=Adminlist&info=users" class=<?php if($info=='users' ) {echo '"nav-link active"';} else {echo '"nav-link"';} ?>>
                  <i class="far fa-circle nav-icon"></i>
                  <p>users</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo $info?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <?php if($info=='category'){ ?>
              <a href="?name=Admin/category/create" type="button" class="btn  btn-warning btn-lg">Create</a>
               <?php } else if ($info=='products'){?>
                <a href="?name=Admin/product/create" type="button" class="btn  btn-warning btn-lg">Create</a>
                <?php } else if ($info=='shops'){?>
                <a href="?name=Admin/shops/create" type="button" class="btn  btn-warning btn-lg">Create</a>
                <?php } else if ($info=='users'){?>
                <a href="?name=Admin/user/create" type="button" class="btn  btn-warning btn-lg">Create</a>
                <?php } ?>
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>

                    <?php $counter=0; ?>
                    <?php foreach ($data1 as $item){ ?>
                   <?php if($counter==0){ ?>
                      <?php foreach($item as $key=>$value){ ?>
                        <?php if(is_string($key)){ ?>
                   <th><?php echo $key ?></th>
                   <?php } ?>
                   <?php } ?>
                   
                        <?php  } ?>
                        <?php $counter++; } ?>
                        
                        <th>Delete</th>
                        <th>Edit</th>
                  </tr>
                  </thead>
                  <tbody>
                  
                 
                    <?php foreach ($data1 as $item){ ?>
                      <tr>
                      <?php foreach($item as $key=>$value){ ?>
                        <?php if(is_string($key)){ ?>
                   <td><?php echo $item[$key] ?></td>
                   <?php } ?>
                  
                   <?php } ?>
                  
                   <?php if($info=='category'){?>
                   <td ><a href=<?php echo '"?name=Admin/category/update&id='.$item['id'].'"' ?>>Edit</a></td>
                   <td ><a href=<?php echo '"?name=Admin/category/delete&id='.$item['id'].'"' ?>>Delete</a></td>
                 <?php } else if($info=='shops') {?>
                  <td ><a href=<?php echo '"?name=Admin/shops/update&id='.$item['id'].'"' ?>>Edit</a></td>
                  <td ><a href=<?php echo '"?name=Admin/shops/delete&id='.$item['id'].'"' ?>>Delete</a></td>
                  <?php } else if ($info=='products'){  ?>
                    <td ><a href=<?php echo '"?name=Admin/product/update&id='.$item['id'].'"' ?>>Edit</a></td>
                    <td ><a href=<?php echo '"?name=Admin/product/delete&?id='.$item['id'].'"' ?>>Delete</a></td>
                    <?php }else if ($info=='users'){  ?>
                    <td ><a href=<?php echo '"?name=Admin/user/update&id='.$item['id'].'"' ?>>Edit</a></td>
                    <td ><a href=<?php echo '"?name=Admin/user/delete&id='.$item['id'].'"' ?>>Delete</a></td>
                    <?php } ?>
                  </tr>
                        <?php  } ?>
                  
                  <thead>
                  <tr>
                  <?php $counter=0; ?>
                    <?php foreach ($data1 as $item){ ?>
                   <?php if($counter==0){ ?>
                      <?php foreach($item as $key=>$value){ ?>
                        <?php if(is_string($key)){ ?>
                   <th><?php echo $key ?></th>
                   <?php } ?>
                   <?php } ?>
                   <?php } ?>
                        <?php $counter++; } ?>
                       <th>Delete</th> 
                       <th>Edit</th>
                  </tr>
                  </thead>
                 
                
                  </tfoot>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src=<?php Load("plugins/jquery/jquery.min.js")?>></script>
<!-- Bootstrap 4 -->
<script src=<?php Load("plugins/bootstrap/js/bootstrap.bundle.min.js")?>></script>
<!-- DataTables  & Plugins -->
<script src=<?php Load("plugins/datatables/jquery.dataTables.min.js")?>></script>
<script src=<?php Load("plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")?>></script>
<script src=<?php Load("plugins/datatables-responsive/js/dataTables.responsive.min.js")?>></script>
<script src=<?php Load("plugins/datatables-responsive/js/responsive.bootstrap4.min.js")?>></script>
<script src=<?php Load("plugins/datatables-buttons/js/dataTables.buttons.min.js")?>></script>
<script src=<?php Load("plugins/datatables-buttons/js/buttons.bootstrap4.min.js")?>></script>
<script src=<?php Load("plugins/jszip/jszip.min.js")?>></script>
<script src=<?php Load("plugins/pdfmake/pdfmake.min.js")?>></script>
<script src=<?php Load("plugins/pdfmake/vfs_fonts.js")?>></script>
<script src=<?php Load("plugins/datatables-buttons/js/buttons.html5.min.js")?>></script>
<script src=<?php Load("plugins/datatables-buttons/js/buttons.print.min.js")?>></script>
<script src=<?php Load("plugins/datatables-buttons/js/buttons.colVis.min.js")?>></script>
<!-- AdminLTE App -->
<script src=<?php Load("dist/js/adminlte.min.js")?>></script>

<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
