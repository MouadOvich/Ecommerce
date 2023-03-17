<?php



class Manager {

    protected $currentController = 'S';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct($url)
    {
        $url= $this->getUrl($url);

        if (count($url)==2) {
            


        } else {
            echo "hello2";
        }
        
    }



    public function getUrl($url){
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
    }

}