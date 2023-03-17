<?php



class Manager {

    public function __construct()
    {
        
    }



    public function getUrl($url){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }

}