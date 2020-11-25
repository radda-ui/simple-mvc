<?php 
namespace mvc\core;


/**
 * 
 */
class Request{
    
   
    public function getpath(){
            $url = explode('?', $_SERVER['REQUEST_URI']);
            $url = trim($url, '/');
            return filter_var($url, FILTER_SANITIZE_URL);
    }

    public function getMethod(){
        return strtolower($_SERVER["REQUEST_METHOD"]);
    }

    public function getparam(){
        $param = explode('/', getpath());
        $controller = isset($param[0]) ?? null;
        $action     = isset($param[1]) ?? null;
        unset($param[0], $param[1]);
        return array(
                    array($controller,$action),
                    array_values($param)
                );
    }
}