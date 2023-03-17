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
            <h1 class="m-0">Nouveau Produit</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
                <div class="text-right">
                    <a href="#" class="btn bg-teal">
                    <i class="fas fa-plus"></i> Ajouter
                    </a>
                </div>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-8">
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Nom</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">SKU</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Description</label>
                            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Prix</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">Prix Comparer</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Quantité</label>
                            <input type="number" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                            </div>
                            <div class="input-group-append">
                            <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                        </div>
                        </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card card-outline card-info">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Mot de passe</label>
                            <input type="password" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Confirmer le mot de passe</label>
                            <input type="password" id="inputName" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

        </div>
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
