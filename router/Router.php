<?php


class Router {

    private $action;
    private $url = [];
    private $uri = [];
    

    function __contructor($url,$uri,$action) {

        $this->action = $action;
        $this->url = $url;
        $this->uri = $uri;
               
    }
    
    public function set_action($action) {
        $this->action = $action;
      }
    public function get_action() {
        return $this->action;
      }
    
    public function set_url($url) {
        $this->url = $url;
      }
    public function get_url() {
        return $this->url;
      }

    public function set_uri($uri) {
        $this->uri = $uri;
      }
    public function get_uri() {
        return $this->uri;
      }


    // LOAD APP ON PAGE LOGIN  
    function StartAppLogin () {

      $dir = __DIR__ ;
      $rtdir = (explode("router", $dir));
      require_once $rtdir[0].'\view\login.php';
      
    }
    
    
    // DEFINE ROUTES TO ACCESS OF APPLICATION
   function setRouter(){
       
    $dir = __DIR__ ;
    $rtdir = (explode("router", $dir));
    $request = $this->url . $this->uri;
    
   switch ($request) {


    case $this->url ."/simorp_beta2/ ":
          require $rtdir[0].'\view\login.php';
            break;

    case $this->url ."/simorp_beta2/login":
            require $rtdir[0].'\view\login.php';
            break;

    case $this->url ."/simorp_beta2/home":
            require $rtdir[0].'\view\home.php';
            require $rtdir[0].'\view\main.php';
            break;

    case $this->url ."/simorp_beta2/solicitacao":
            require $rtdir[0].'\view\solicitacao.php';
            require $rtdir[0].'\view\main.php';
            break;

    case $this->url ."/simorp_beta2/catalog":
            require $rtdir[0].'\view\catalog.php';
            require $rtdir[0].'\view\main.php';
            break;
        
    case $this->url ."/simorp_beta2/relatorios":
            require $rtdir[0].'\view\relatorios.php';
            require $rtdir[0].'\view\main.php';
            
            break;
    
      
    } 
    
  } 
  
}



?>