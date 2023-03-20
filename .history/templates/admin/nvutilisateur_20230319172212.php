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
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Utilisateurs</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="card card-outline card-info">
            <div class="card-header">
                <div class="text-right">
                  <?php echo (isset($data['id_utilisateur'])) ? 
                      '<button href="submit" name="mod" class="btn btn-sm bg-teal"><i class="fas fa-pen"></i> Modifier</button>' 
                      : '<button href="submit" name="ajt" class="btn btn-sm bg-teal"><i class="fas fa-plus"></i> Ajouter</button>' ;
                  ?>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="inputName">Nom</label>
                            <input type="hidden" name="id_user" value="<?php echo (isset($data)) ? $data["id_utilisateur"] : '' ;?>">
                            <input type="text" name="nom" id="inputName" class="form-control" value="<?php echo (isset($data)) ? $data["nom_utilisateur"] : '' ;?>">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Email</label>
                            <input type="email" name="email" id="inputName" value="<?php echo (isset($data)) ? $data["email"] : '' ;?>" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="inputName">Mot de passe</label>
                            <input type="password" name="mdp" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Confirmer le mot de passe</label>
                            <input type="password" name="conf" id="inputName" class="form-control">
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
