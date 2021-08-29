<?php
/**
 * This class will get the url and put it into array
 * 
 * @author Prichard
 */

class Bootstrap{
    function __construct(){
        
        $url =isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/',$url);

        if(empty($url[0])){
            require './controllers/ApplicationForEmployment.php';
            $controller = new ApplicationForEmployment();
            $controller->index();
            return false;
        }
        $page = $this->convertToStudlyCaps($url[0]);
        $file = 'controllers/'.$this->convertToStudlyCaps($url[0]).'.php';
        if(file_exists($file)){
            require $file;
        }

        $controller = new $page;
        // $controller->loadModel($page);

        if(isset($url[2])){
            if(method_exists($controller, $url[1])){
                $controller->{$url[1]}($url[2]);//$controller->function()
            }
        }else{
            if(isset($url[1])){
                if(is_numeric($url[1])){
                    // $id = $url[1];
                    Session::set('id',$url[1]);
                    $controller->index();
                }
                elseif(method_exists($controller, $url[1])){
                    $controller->{$url[1]}();
                }
            }else{
                $controller->index();
            }
        }

    }
    protected function convertToStudlyCaps($string){
        return str_replace(' ', '',ucwords(str_replace('-',' ',$string)));
    }

    protected function convertToCamelCase($string){
        return lcfirst($this->convertToStudlyCaps($string));
    }
}