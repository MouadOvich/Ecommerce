<?php



class Path {
    
    public static function getAdminViews($path)
    {
        require "../templates/admin/".$path.".php";
    }


    public static function getLibs($class)
    {
        require "../src/libs/".$class.".php";
    }

    public static function getAdminController($class)
    {
        require "../src/controllers/admin/".$class.".php";
    }
    public static function getShController($class)
    {
        require "../src/controllers/admin/".$class.".php";
    }

}