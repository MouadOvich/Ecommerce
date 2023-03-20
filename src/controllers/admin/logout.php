<?php


class Logout
{
    public function __construct()
    {
        unset($_SESSION['login']);
        unset($_SESSION['nom']);
        unset($_SESSION['email']);
        session_destroy();
    }
    
}
