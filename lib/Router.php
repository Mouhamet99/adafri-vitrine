<?php
namespace ism\lib;

use ism\controllers\ErreurController;

class Router  {
    private Request $request;
    private ErreurController $ctlrError;

    public function  __construct(){
        $this-> request = new Request();
        $this-> ctlrError = new ErreurController();

    }

    public function resolve(){
        $array_uri = $this->request->getUri();
        $array_uri = str_replace('-', '_', $array_uri);
      
        // if(empty($array_uri[0]) )Response::redirectUrl("");
        $action = empty($array_uri[0]) ? "accueil" : $array_uri[0];
        if(strpos($action,".")) Response::redirectUrl("");
        $controller=ucfirst("PageController");
        
        if(file_exists(ROOT.DIRECTORY_SEPARATOR."controllers".DIRECTORY_SEPARATOR.$controller.".php")){
            $controllerClass= "ism\\controllers\\".$controller;
            $objectController = new $controllerClass();
            
            if(is_callable(array($objectController, $action))){
                call_user_func([$objectController,$action],$this->request);
            }else{
                $this->ctlrError->pageNotFound();
            }
        }else{
            $this->ctlrError->pageNotFound();
        }
    }
}

?>