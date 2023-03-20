<?php
Path::getClass("connexion");

class Produit{
    

    public function listProduit($url)
    {
        Path::getModel($url[0]);
        $cl=ucwords($url[0])."Repo";
        $pc=new $cl;
        $products=$pc->getAll();
        Path::getAdminViews($url[0],$products);
    }

    public function gererProduit($param)
    {

        Path::getModel($param[0]);
        $cl=ucwords($param[0])."Repo";
        $pc=new $cl;
        Path::getLibs('helpers');

        if (isset($param[1])) {

            if (is_numeric($param[1])) {

                if (isset($param[2])) {

                    print_r($_POST);
                    if (isset()) {
                        # code...
                    }
                    print_r($_FILES);
                    //Path::getAdminViews("nvproduit");
                } else {
                    $product=$pc->getById($param[1]);
                    Path::getAdminViews("nvproduit",$product);
                }
                
            } else if ($param[1]=="ajouter") {
                
                $image=explode('.',$_FILES['image']['name']);
                $_POST['image']=uniqid($image[0]).".".$image[1];
                // print_r($_POST);
                $product=$pc->addProd($_POST);

                if ($product) {
                    move_uploaded_file($_FILES['image']['tmp_name'],"./assets/img/produit/".$_POST['image']);
                    header('Location:/index.php/admin/produit/gererProduit');
                }
            }
            

            
        } else {
            Path::getAdminViews("nvproduit");
        }
        
        
    }
}