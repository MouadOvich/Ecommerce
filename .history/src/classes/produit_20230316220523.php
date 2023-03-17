<?php



class Produit {
    public string $nom;
    public string $description;
    public string $prix;
    public string $comprix;
    public string $sku;
    public string $qte;
    public string $image;
    public Categorie $cat;

    public function __construct($nom, $description, $prix, $comprix, $sku, $qte, $image, $cat)
    {
        $this->nom=$nom;
        $this->description=$description;
        $this->prix=$prix;
        $this->comprix=$comprix;
        $this->sku=$sku;
        $this->qte=$qte;
        $this->image=$image;
        $this->cat=$cat;
    }
}