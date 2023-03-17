<?php



class Manager {

    

    public function __construct($url)
    {
        $this->url= $this->getUrl($url);
    }



    public function getUrl($url){
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
    }

}