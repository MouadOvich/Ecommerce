<?php


class Logout
{
    public function __construct()
    {
        unset($_SESSION['login']);
        session_destroy();
    }
    
}
