<?php



class Manager {

    public function __construct($url)
    {
        $url= $this->getUrl($url);
        if (count) {
            # code...
        } else {
            # code...
        }
        
    }



    public function getUrl($url){
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
    }

}