<?php
require "../src/libs/path.php";


$url = $_SERVER['PHP_SELF'];
// if ($url=='index.php/produit') {
//     require "../templates/admin/produit.php";
// } else if($url=='index.php/nvproduit') {
//     require "../templates/admin/nvproduit.php";
// }
if ($url=="/index.php/455") {
    // $res=explode("/", $url);
    // $path=end($res);
    // echo $path;
    Path::getLibs('manager');
    new Manager($url);

}else if ($url=="/index.php/categorie"){
    $res=explode("/", $url);
    $path=end($res);
    Path::getAdminViews($path);

}



