<?php
require("../src/libs/path.php");


$url = $_SERVER['PHP_SELF'];
// if ($url=='index.php/produit') {
//     require "../templates/admin/produit.php";
// } else if($url=='index.php/nvproduit') {
//     require "../templates/admin/nvproduit.php";
// }
if ($url=="/index.php") {
    // $res=explode("/", $url);
    // $path=end($res);
    // echo $path;
    echo $mg->

}else if ($url=="/index.php/categorie"){
    $res=explode("/", $url);
    $path=end($res);
    Path::getAdminViews($path);

}



