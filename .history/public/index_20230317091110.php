<?php
Path::getLibs('manager');


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
    Path::getLibs('manager');
    $mg=new Manager($url);
    var_dump($mg->url);

}else if ($url=="/index.php/categorie"){
    $res=explode("/", $url);
    $path=end($res);
    Path::getAdminViews($path);

}



