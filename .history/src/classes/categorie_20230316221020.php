<?php


class Categorie{
    public string $libele;
    public string $description;
    public string $parentCat;

    public function __construct(Type $var = null)
    {
        # code...
    }
}