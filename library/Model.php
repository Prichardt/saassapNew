<?php 
class Model{

    function __construct(){
        $this->content =new Content();
        $this->view = new Views();
        $this->database = new Database();
    }
  
}