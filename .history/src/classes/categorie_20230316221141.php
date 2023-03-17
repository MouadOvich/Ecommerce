<?php


class Categorie{
    public string $libele;
    public string $description;
    public string $parentCat;

    public function __construct($libele, $description, $parentCat)
    {
        $this->libele=$libele;
        $this->description=$description;
        $this->parentCat=$parentCat;
    }
}