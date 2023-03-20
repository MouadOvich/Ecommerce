<?php




class LoginRepo{

    public $connexion;
    
    function __construct() {
        $co=new Connexion();
        $this->connexion = $co->connexionDB();
    }

    public function getMdp($email)
    {
        $connexion=$this->connexion;
        $sql = "SELECT mdp, nom_utilisateur FROM `utilisateur` WHERE email='$email' ";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $user = $stm->fetch();
        return $user;
    }
}