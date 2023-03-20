<?php
Path::getClass("connexion");

class Categorie{


    public function listCategorie($url)
    {
        Path::getModel($url[0]);
        $cl=ucwords($url[0])."Repo";
        $pc=new $cl;
        $cats=$pc->getAll();
        Path::getAdminViews($url[0],$cats);
    }

    public function gererCategorie($param)
    {

        Path::getModel($param[0]);
        $cl=ucwords($param[0])."Repo";
        $pc=new $cl;
        Path::getLibs('helpers');

        if (isset($param[1])) {

            if (is_numeric($param[1])) {

                if (isset($param[2])) {

                    if ($param[2]=='supprimer') {
                        $response=$pc->deleteCat($param[1]);
                        if ($response) {
                            header('Location:/index.php/admin/categorie/listCategorie');
                        }
                        
                    } else if ($param[2]=='modifier'){

                        if (isset($_POST['mod'])) {
                        
                            $response=$pc->updtCat($_POST);
        
                            if ($response) {
                                header('Location:/index.php/admin/categorie/gererCategorie/'.$_POST['id_prod']);
                            }
                        }
                        
                    }
                    



                } else {
                    $ct=$pc->getById($param[1]);
                    Path::getAdminViews("nvcategorie",$product);
                }
                
            } else if ($param[1]=="ajouter") {

                if (isset($_POST['ajt'])) {
                    $cat=$pc->addCat($_POST);

                    if ($cat) {
                        header('Location:/index.php/admin/categorie/gererCategorie');
                    }
                }
            }
            

            
        } else {
            Path::getAdminViews("nvcategorie");
        }
        
        
    }



}