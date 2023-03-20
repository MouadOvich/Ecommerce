<?php
require "../src/libs/path.php";


$url = $_SERVER['PHP_SELF'];
// if ($url=='index.php/produit') {
//     require "../templates/admin/produit.php";
// } else if($url=='index.php/admin/produit/gererProduit') {
//     require "../templates/admin/admin/produit/gererProduit.php";
// }

    Path::getLibs('manager');
    new Manager($url);


// else if ($url=="/index.php/categorie"){
//     $res=explode("/", $url);
//     $path=end($res);
//     Path::getAdminViews($path);

// }

