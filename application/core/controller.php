<?php 
namespace mvc\core;

class Controller{
    
    public View $view;

    function __construct(){
        $this->view = new View();
    }
    public function index($param){
        $this->view->show(static::class,$param);
    }
}