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
            <h1 class="m-0">Nouvelle Catégorie</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Nouvelle Catégorie</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <form action="/index.php/admin/categorie/gererCategorie/<?php echo (isset($data)) ? $data["id_cat"].'/modifier' : 'ajouter' ;?>" method="post">
        <div class="card card-outline card-info">
            <div class="card-header">
                <div class="text-right">
                  <?php echo (isset($data['id_cat'])) ? 
                    '<button href="submit" name="mod" class="btn btn-sm bg-teal"><i class="fas fa-pen"></i> Modifier</button>' 
                    : '<button href="submit" name="ajt" class="btn btn-sm bg-teal"><i class="fas fa-plus"></i> Ajouter</button>' ;
                  ?>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body col-8">
              <div class="form-group">
                <label for="inputName">Libelle</label>
                <input type="hidden" name="id_cat" value="<?php echo (isset($data)) ? $_GET['id'] : '' ;?>">
                <input type="text" id="inputName" name="libelle" class="form-control" value="<?php echo (isset($data)) ? $data['libele'] : '' ;?>">
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" name="desc" class="form-control" rows="4"><?php echo (isset($data)) ? $data['description'] : '' ;?></textarea>
              </div>
              <div class="form-group">
                  <label>Catégorie parent</label>
                  <select class="custom-select" name="sub_cat">
                      <option disabled selected>Sélectionnez une catégorie</option>
                      <?php 
                          $hp=new helpers();
                          $sql="SELECT * FROM categorie";
                          if (isset($data)) {
                              $hp->remplir($sql,$data['sous_categorie']);
                          } else {
                              $hp->remplir($sql);
                          }
                      ?>
                  </select>
                  <div class="form-text">Sélectionnez une catégorie qui sera le parent de la catégorie actuelle.</div>
              </div>
            </div>
        </div>
        </form>
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
