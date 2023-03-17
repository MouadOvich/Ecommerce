<?php


class Produit{



    public static function getAll($connexion,$id=null){

        if ($id==null) {
            $sql = "SELECT * FROM produit p, categorie c WHERE p.visibilite=1 AND p.id_cat=c.id_cat";
        } else {
            $sql = "SELECT * FROM produit p, categorie c WHERE p.visibilite=1 AND p.id_cat=c.id_cat AND (p.id_cat=$id OR c.sous_categorie=$id)";
        }
        
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $list_products = $stm->fetchAll();
        return $list_products;
    }

    public static function getById($connexion,$id){
        $sql = "SELECT * FROM produit WHERE visibilite=1 AND id_prod=$id ";
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $list_products = $stm->fetch();
        return $list_products;
    }

    public static function addProd($connexion,$data){
        $sql = "INSERT INTO `produit`(`nom`, `description`, `prix`, `comp_prix`, `sku`, `qte`, `date_pub`, `image1`, `id_cat`) VALUES (?,?,?,?,?,?,NOW(),?,?)";
        $stm = $connexion->prepare($sql);
        $lines=$stm->execute([$data['nom'],$data['desc'],$data['prix'],$data['comp_prix'],$data['sku'],$data['qte'],$data['image'],$data['cat']]);
        return ($lines>0);
    }
    public static function updtProd($connexion,$data){
        if ($data['image']!=null) {
            $sql = "UPDATE `produit` SET `nom`=?,`description`=?,`prix`=?,`comp_prix`=?,`sku`=?,`qte`=?,`date_pub`=NOW(),`image1`=?,`id_cat`=? WHERE id_prod=?";
            $stm = $connexion->prepare($sql);
            $lines=$stm->execute([$data['nom'],$data['desc'],$data['prix'],$data['comp_prix'],$data['sku'],$data['qte'],$data['image'],$data['cat'],$data['id_prod']]);
        } else {
            $sql = "UPDATE `produit` SET `nom`=?,`description`=?,`prix`=?,`comp_prix`=?,`sku`=?,`qte`=?,`date_pub`=NOW(),`id_cat`=? WHERE id_prod=?";
            $stm = $connexion->prepare($sql);
            $lines=$stm->execute([$data['nom'],$data['desc'],$data['prix'],$data['comp_prix'],$data['sku'],$data['qte'],$data['cat'],$data['id_prod']]);
        }
        
        return ($lines>0);

    }

    
    public static function deleteProd($connexion, $data){
        $sql = "DELETE FROM `produit` WHERE id_prod=?";
        $stm = $connexion->prepare($sql);
        $lines=$stm->execute([$data[0]]);
        return ($lines>0);
    }



}