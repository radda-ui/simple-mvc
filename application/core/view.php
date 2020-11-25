<?php 
namespace mvc\core;


class View {


    public function show($param){
        if( is_array($param)) extract($param);
        $this->load();
    }
    public function load($view){
        if(file_exists("../view/$view/view.php")) require_once "../views/$view/$view.php";
        else require_once "../views/error.php";
    }

}