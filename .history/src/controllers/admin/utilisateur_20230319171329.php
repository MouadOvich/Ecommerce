<?php

Path::getClass("connexion");

class Utilisateur{


    public function listUtilisateur($url)
    {
        Path::getModel($url[0]);
        $cl=ucwords($url[0])."Repo";
        $pc=new $cl;
        $cats=$pc->getAll();
        Path::getAdminViews($url[0],$cats);
    }

    public function gererUtilisateur($param)
    {

        Path::getModel($param[0]);
        $cl=ucwords($param[0])."Repo";
        $pc=new $cl;
        Path::getLibs('helpers');

        if (isset($param[1])) {

            if (is_numeric($param[1])) {

                if (isset($param[2])) {

                    if ($param[2]=='supprimer') {
                        $response=$pc->deleteUser($param[1]);
                        if ($response) {
                            header('Location:/index.php/admin/utilisateur/listUtilisateur');
                        }
                        
                    } else if ($param[2]=='modifier'){

                        if (isset($_POST['mod'])) {
                        
                            $response=$pc->updateCat($_POST);
        
                            if ($response) {
                                header('Location:/index.php/admin/utilisateur/gererUtilisateur/'.$_POST['id_cat']);
                            }
                        }
                        
                    }
                    



                } else {
                    $cat=$pc->getById($param[1]);
                    Path::getAdminViews("nvutilisateur",$cat);
                }
                
            } else if ($param[1]=="ajouter") {

                if (isset($_POST['ajt'])) {
                    $cat=$pc->addCat($_POST);

                    if ($cat) {
                        header('Location:/index.php/admin/utilisateur/gererUtilisateur/');
                    }
                }
            }
            

            
        } else {
            Path::getAdminViews("nvcategorie");
        }
        
        
    }

}