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
    Path::getLibs('manager');
    new Manager($url);
}



