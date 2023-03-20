<?php
require "../src/libs/path.php";


$url = $_SERVER['PHP_SELF'];
// if ($url=='index.php/produit') {
//     require "../templates/admin/produit.php";
// } else if($url=='index.php/admin/produit/gererProduit') {
//     require "../templates/admin/admin/produit/gererProduit.php";
// }
if ($url=="/index.php" ) {
    // $res=explode("/", $url);
    // $path=end($res);
    // echo $path;
    Path::getLibs('manager');
    new Manager($url);

}else{
    try {
        Path::getLibs('manager');
        new Manager($url);
    } catch (\Throwable $th) {
        echo ""
    }

}

// else if ($url=="/index.php/categorie"){
//     $res=explode("/", $url);
//     $path=end($res);
//     Path::getAdminViews($path);

// }

