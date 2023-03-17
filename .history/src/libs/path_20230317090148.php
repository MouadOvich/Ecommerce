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



}