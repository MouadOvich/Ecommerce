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
                    # code...
                } else {
                    $product=$pc->getById($param[1]);
                    Path::getAdminViews("nvproduit",$product);
                }
                
            } else if ($param[1]=="ajouter") {
                
            }
            

            
        } else {
            Path::getAdminViews("nvproduit");
        }
        
        
    }
}