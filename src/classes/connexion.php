<?php

class Connexion {

    private $username = "root";
    private $password = "";
    private $dbname = "ecomm";
    private $host = "localhost";


    public function connexionDB()
    {
       return new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->username,$this->password);
    }


}