<?php
class Controller{

    function __construct(){
        Session::init();
        $this->view = new Views();
    }

    public function loadModel($name){
        // $name = strval($name);
        $path = 'models/'.$name.'Model.php';
        if(file_exists($path)){
            require $path;
            $modelName = new $name.'Model';
            $this->model = new $modelName();
        }
    }

}