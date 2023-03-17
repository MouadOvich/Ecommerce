<?php



class Manager {

    protected $currentController = 'shopController';
    protected $currentMethod = 'home';
    protected $params = [];

    public function __construct($url)
    {
        $url= $this->getUrl($url);

        if (count($url)==2) {
            echo "hello";


        } else {
            Path::getAdminViews($path);
        }
        
    }



    public function getUrl($url){
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
    }

}