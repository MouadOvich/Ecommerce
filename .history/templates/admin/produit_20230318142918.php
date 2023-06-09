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
        <div class="row ">
          <div class="col-sm-6">
            <h1 class="m-0">Produits</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="text-right">
              <a href="/index.php/admin/produit/gererProduit" class="btn btn-outline-dark">Nouveau Produit
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
                    <th></th>
                    <th>Produit</th>
                    <th>Prix</th>
                    <th>Catégorie</th>
                    <th>Inventaire</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data as $product) {
                      $stock= ($product['qte']>0) ?
                      '<span class="badge badge-success">'.$product['qte'].' disponible en stock</span> ' 
                      :'<span class="badge badge-danger">En rupture de stock</span>';
                      
                    ?>
                    <tr>
                      <th>
                      <div class="user-block"><img class="img-xs" src="../../../vendor/dist/img/produit/<?php echo $product['image1'] ?>"></div>
                      </th>
                      <td style="text-align:left;">
                        <div class="user-block">
                          <div class="">
                            <a href="/index.php/admin/produit/gererProduit" class="float-left"><?php echo $product['nom'] ?></a>
                            <div  class="float-left ml-2"><small>(ID : <?php echo $product['id_prod'] ?> - SKU : <?php echo $product['sku'] ?>)</small></div>
                            
                          </div><br>
                          
                        </div>  
                      </td>
                      <td><?php echo $product['prix'].' MAD' ?>
                      </td>
                      <td><?php echo $product['libele'] ?>
                      </td>
                      <td><?php echo $stock ?>
                      </td>
                      <td class="float-right">
                        <button class="nav-link btn btn-link btn-xs" data-toggle="dropdown" href="#">
                        <i class="fas fa-ellipsis-v "></i>
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" tabindex="-1" href="/index.php/admin/produit/gererProduit">Modifier</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item text-danger" tabindex="-1" href="#">Supprimer</a>
                        </div>
                      </td>
                    </tr>
                  <?php } ?>
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
