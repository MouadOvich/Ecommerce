<?php



class UtilisateurRepo{

    public $connexion;
    
    function __construct() {
        $co=new Connexion();
        $this->connexion = $co->connexionDB();
    }


    public function getAll(){

        $connexion=$this->connexion;
        $sql = "SELECT * FROM `utilisateur`";

        $stm = $connexion->prepare($sql);
        $stm->execute();
        $list_users = $stm->fetchAll();
        return $list_users;
    }

    public function getById($id){
        $connexion=$this->connexion;
        $sql = "SELECT * FROM `utilisateur` WHERE id_utilisateur=$id";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $user = $stm->fetch();
        return $user;
    }

    public  function addUser($data){
        $connexion=$this->connexion;
        $sql = "INSERT INTO `utilisateur`(`nom_utilisateur`, `email`, `mdp`) VALUES  (?, ?, ?)";
        $stm = $connexion->prepare($sql);
        $mdp=password_hash($data['mdp'], PASSWORD_DEFAULT);
        $lines=$stm->execute([$data['nom'],$data['email'],$mdp]);
        return ($lines>0);
    }

    public  function updateUser($data){
        $connexion=$this->connexion;
        if ($data[]) {
            # code...
        } else {
            # code...
        }
        
        $sql = "UPDATE `utilisateur` SET `nom_utilisateur`=?,`email`=?,`mdp`=? WHERE id_utilisateur=? ";
        $stm = $connexion->prepare($sql);
        $mdp=password_hash($data['mdp'], PASSWORD_DEFAULT);
        $lines=$stm->execute([$data['nom'],$data['email'],$mdp,$data['id_user']]);
        return ($lines>0);
    }

    public function deleteUser($data){
        $connexion=$this->connexion;
        $sql = "DELETE FROM `utilisateur` WHERE id_utilisateur=?";
        $stm = $connexion->prepare($sql);
        $lines=$stm->execute([$data[0]]);
        return ($lines>0);
    }
}