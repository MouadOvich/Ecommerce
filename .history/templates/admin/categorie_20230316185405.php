<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin</title>

  <?php require_once "../templates/admin/style/style.php" ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="./vendor/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <?php require_once "../templates/admin/header/header.php" ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  <?php require_once "../templates/admin/sidebar/sidebar.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Catégories</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Catégories</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Libele</th>
                    <th>Date de publication</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <th>
                        1
                    </th>
                    <td style="text-align:left;">
                      <div class="user-block">
                        <span class="">
                          <a href="#" class="float-left">Cat 1</a><br>
                        </span><br>
                      </div>  
                    </td>
                    <td>
                      <span class="badge badge-dark">En rupture de stock</span>
                    <!-- <span class="badge badge-success">20 disponible en stock</span>  -->
                    </td>
                    <td style="text-align:right;">
                      <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="fas fa-ellipsis-v"></i>
                      </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" tabindex="-1" href="#">Modifier</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" tabindex="-1" href="#">Supprimer</a>
                      </div>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php require_once "../templates/admin/footer/footer.php" ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php require_once "../templates/admin/scripts/scripts.php" ?>

</body>
</html>
