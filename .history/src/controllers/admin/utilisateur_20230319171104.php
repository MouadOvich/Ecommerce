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

    

}