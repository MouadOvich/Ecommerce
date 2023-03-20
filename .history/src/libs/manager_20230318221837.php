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

                if(file_exists("../src/controllers/".$url[2]."/".$url[3].".php")){
                    $this->currentController = ucwords($url[3]);
                    Path::getAdminController($this->currentController);
                    unset($url[0]);
                    unset($url[1]);
                    unset($url[2]);
                    $view=$url[3];
                    unset($url[3]);
                }
                $this->currentController = new $this->currentController;

                if(isset($_GET['action'])){
                    echo "ello";
                }else{

                    if(method_exists($this->currentController, $url[4])){
                        $this->currentMethod = $url[4];
                        //unset($url[4]);
                        //if ($url) {
                            $url[4]=$view;
                            $p = array_values($url);
                            if (isset($_FILES)) {
                                $p=array($p,);
                            } else {
                                $p=array($p);
                            }
                            
                            $p=array($p);
                        //} 
                        // else {
                        //     $p=$view;
                        // }
                        
                        $this->params=$p;
                        call_user_func_array(
                            [$this->currentController,$this->currentMethod],$this->params
                        );
                    }
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