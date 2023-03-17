<?php



class Path {
    
    public static function getAdminViews($path)
    {
        require "../templates/admin/".$path.".php";
    }

    


}