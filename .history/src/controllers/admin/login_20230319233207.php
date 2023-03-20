<?php
Path::getClass("connexion");

class Login{

    public function verifyLogin($data)
    {
        $lr=new LoginRepo();
        $res=$lr->getMdp($data['email']);
        
    }

}