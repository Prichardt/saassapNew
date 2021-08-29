<?php

class ApplicationForEmployment extends Controller{
private $model;

    function __construct(){
        parent::__construct();
        $this->model = new ApplicationForEmploymentModel();

    }

    public function index(){
        $data = array(
            "pageName"=>('Application for Employment')            
        );
      
     
        $this->view->renderTemplate('application-for-employment/index.html', $data);
    }

    public function send(){
        
       $msg = $this->model->insertData();
        $data = array(
            "pageName"=>"Contact Us",
            "sendMsg" => $msg
        );
        $this->view->renderTemplate('application-for-employment/index.html', $data);
    }

    
}