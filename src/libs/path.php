<?php



class Path {
    
    public static function getAdminViews($path,$data=null)
    {
        require "../templates/admin/".$path.".php";
    }

    public static function getClass($class)
    {
        require "../src/classes/".$class.".php";
    }

    public static function getLibs($class)
    {
        require "../src/libs/".$class.".php";
    }

    public static function getAdminController($class)
    {
        require "../src/controllers/admin/".$class.".php";
    }
    public static function getShopController($class)
    {
        require "../src/controllers/shop/".$class.".php";
    }

    public static function getModel($class)
    {
        require "../src/model/".$class."Repo.php";
    }

}