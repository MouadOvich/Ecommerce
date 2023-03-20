<?php
Path::getClass("connexion");

class Login{

    public function verifyLogin($data)
    {
        
        $lr=new LoginRepo();
        $res=$lr->getMdp($data['email']);

        if (password_verify($data['mdp'], $res[0])) {
            $_SESSION['login']='connecter';
            $_SESSION['email']=$data['email'];
            $_SESSION['nom']=$res[1];
            header('Location:/index.php/admin/produit/listProduit');
        } else {
            header('Location:/index.php/login');
        }
    }

}