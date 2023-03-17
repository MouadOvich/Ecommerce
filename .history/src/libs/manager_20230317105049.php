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


        } else if (count($url)==2 && isempty()) {}
        else {
            if ($url[1]=="admin") {
                echo $url[2];
                //Path::getAdminViews(end($url));
            } else if ($url[1]=="shop"){
                Path::getAdminViews(end($url));
            }else{
                Path::getAdminViews(end($url));
            }
            

            // if(file_exists("../src/controllers/".$url[1]."/".$url[2].".php")){
            //     $this->currentController = $url[2];
            //     //unset($url[0]);
            // }

            // require_once "../src/controllers/".$url[1]."/".$this->currentController.".php";
            // $this->currentController = new $this->currentController;

            // Path::getAdminViews(end($url));
        }
        
    }



    public function getUrl($url){
            $url = rtrim($url, '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
    }

}