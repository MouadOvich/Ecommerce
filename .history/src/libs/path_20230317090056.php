<?php



class Path {
    
    public static function getAdminViews($path)
    {
        require "../templates/admin/".$path.".php";
    }


    public static function getLibs($path)
    {
        require "../templates/admin/".$path.".php";
    }



}