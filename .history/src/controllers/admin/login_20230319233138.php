<?php
Path::getClass("connexion");

class Login{

    public function verifyLogin($data)
    {
        $lr=new LoginRepo();
        $mdp=$lr->getMdp($data['email']);
    }

}