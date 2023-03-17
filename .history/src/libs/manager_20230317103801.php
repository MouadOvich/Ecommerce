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

            if(file_exists("../src/controllers/".$url[1]."/".$url[2].".php")){
                $this->currentController = $url[0];
                unset($url[0]);
            }
            Path::getAdminViews(end($url));
        }
        
    }



    public function getUrl($url){
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
    }

}