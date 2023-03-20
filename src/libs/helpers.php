<?php

class helpers{

    public $connexion;
    
    function __construct() {
        $co=new Connexion();
        $this->connexion = $co->connexionDB();
    }

    function remplir($sql,$id=null){
        $connexion=$this->connexion;
        $stm = $connexion->prepare($sql);
        $stm->execute();
        $items = $stm->fetchAll();
        foreach ($items as $item) {
            if ($item[0]==$id) {
                echo "<option value='$item[0]' selected>".$item[1]."</option>";
            } else {
                echo "<option value=".$item[0].">".$item[1]."</option>";
            }
        }
    }
    
    
    
    function remplirDropDown($connexion,$id=null){
        $stm = $connexion->prepare("SELECT `id_cat`, `libele`, `sous_categorie` FROM `categorie` WHERE `sous_categorie`=$id");
        $stm->execute();
        $items = $stm->fetchAll();
        foreach ($items as $item) {
            $id=$item["id_cat"];
            echo '<li><a class="dropdown-item" href="/index.php/boutique?id='.$id.'" >'.$item["libele"].'</a></li>';
        }
    }





}


?>