<?php


class CategorieRepo{

    public $connexion;
    
    function __construct() {
        $co=new Connexion();
        $this->connexion = $co->connexionDB();
    }



    public function getAll(){
        $connexion=$this->connexion;
        $sql = "SELECT * FROM categorie WHERE visibilite=1 AND sous_categorie IS NULL";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $list_cats = $stm->fetchAll();
        return $list_cats;
    }

    public function countParentCat($id){
        $connexion=$this->connexion;
        $sql = "SELECT count(*) FROM categorie WHERE visibilite=1 AND sous_categorie=$id";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $list_cats = $stm->fetch();
        return $list_cats[0];
    }

    public function getById($id){
        $connexion=$this->connexion;
        $sql = "SELECT * FROM categorie WHERE id_cat=$id";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $list_cats = $stm->fetch();
        return $list_cats;
    }

    public function addCat($data){
        $connexion=$this->connexion;
        $sql = "INSERT INTO `categorie`(`libele`, `description`, `date_pub`, `sous_categorie`) VALUES (?, ?, NOW(), ?)";
        $stm = $connexion->prepare($sql);
        $lines=$stm->execute([$data['libelle'],$data['desc'],$data['sub_cat']]);
        return ($lines>0);
    }

    public function updateCat($data){
        $connexion=$this->connexion;
        $sql = "UPDATE `categorie` SET `libele`=?,`description`=?,`date_pub`=NOW(),`sous_categorie`=? WHERE id_cat=?";
        $stm = $connexion->prepare($sql);
        $lines=$stm->execute([$data['libelle'],$data['desc'],$data['sub_cat'],$data['id_cat']]);
        return ($lines>0);
    }

    public function deleteCat($data){
        $sql = "DELETE FROM `categorie` WHERE id_cat=?";
        $stm = $connexion->prepare($sql);
        $lines=$stm->execute([$data[0]]);
        return ($lines>0);
    }

}