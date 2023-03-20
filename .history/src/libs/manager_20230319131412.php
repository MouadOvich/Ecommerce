<?php



class Manager {

    protected $currentController = 'shopController';
    protected $currentMethod = 'home';
    protected $params = [];

    public function __construct($url)
    {
        $url= $this->getUrl($url);

        if (count($url)==2) {
            echo end($url);


        }else {
            if ($url[2]=="admin") {
                if (isset($url[3])) {
                    # code...
                } else {
                    # code...
                }
                




                //Path::getAdminViews(end($url));
            } else if ($url[2]=="shop"){
                Path::getAdminViews(end($url));
            }else{
                
            }
            

            

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