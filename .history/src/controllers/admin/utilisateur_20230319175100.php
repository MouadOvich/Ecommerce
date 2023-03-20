<?php

Path::getClass("connexion");

class Utilisateur{


    public function listUtilisateur($url)
    {
        Path::getModel($url[0]);
        $cl=ucwords($url[0])."Repo";
        $pc=new $cl;
        $users=$pc->getAll();
        Path::getAdminViews($url[0],$users);
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
                            
                        
                            $response=$pc->updateUser($_POST);
        
                            if ($response) {
                                header('Location:/index.php/admin/utilisateur/gererUtilisateur/'.$_POST['id_utilisateur']);
                            }
                        }
                        
                    }
                    



                } else {
                    $user=$pc->getById($param[1]);
                    if (empty($user)) {
                        header('Location:/index.php/admin/utilisateur/listUtilisateur');
                    } else {
                        Path::getAdminViews("nvutilisateur",$user);
                    }
                    
                    
                }
                
            } else if ($param[1]=="ajouter") {

                if (isset($_POST['ajt'])) {

                    if ($_POST['mdp']==$_POST['conf_mdp']) {

                        $user=$pc->addUser($_POST);

                        if ($user) {
                            header('Location:/index.php/admin/utilisateur/gererUtilisateur');
                        }

                    } else {
                        header('Location:/index.php/admin/utilisateur/gererUtilisateur?err=is-invalid');
                    }
                    

                }
            }
            

            
        } else {
            Path::getAdminViews("nvutilisateur");
        }
        
        
    }

}