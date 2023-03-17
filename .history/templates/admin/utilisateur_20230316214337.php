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
            <h1 class="m-0">Utilisateurs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="text-right">
              <a href="/index.php/nvproduit" class="btn btn-outline-dark">Nouveau Produit
              </a>
            </div>
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
                    <th>Nom</th>
                    <th>Email</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>
                        1
                    </td>
                    <td style="text-align:left;">
                        <a href="#" class="float-left">Hamid Zin</a>
                    </td>
                    <td>
                      admin@email.com
                    </td>
                    <td class="float-right">
                      <button class="nav-link btn btn-link btn-xs" data-toggle="dropdown" href="#">
                      <i class="fas fa-ellipsis-v "></i>
                      </button>
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
