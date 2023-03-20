<?php
Path::getClass("connexion");

class Login{

    public function verifyLogin($data)
    {
        $lr=new LoginRepo();
        $res=$lr->getMdp($data['email']);
        if (password_verify($data['mdp'], $mdp[0])) {
            $_SESSION['login']='connecter';
            $_SESSION['email']=$data['email'];
            $_SESSION['nom']=$mdp[1];
            header('Location:/index.php/productlist');
        } else {
            header('Location:/index.php/login');
        }
    }

}