<?php



class Path {
    
    public static function getAdminViews($path)
    {
        require "../templates/admin/".$path.".php";
    }


    public static function getLibs($)
    {
        require "../src/libs/".$path.".php";
    }



}