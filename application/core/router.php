<?php 
namespace mvc\core;

/**
 * 
 */
class Router{
    private $routes = array(
                            "get" => [],
                            "post"=> []
                        );

    protected Request  $request ;
    protected Responce $response;
    
    function __construct(Request $request,Response $response){
        $this->request  = $request;
        $this->responce = $response;
    }

    public function get($path,$callback){
        $this->routes['get'][$path] = $callback;
    }
    public function post($path,$callback){
        $this->routes['post'][$path] = $callback;
    }
    public function resolve(){
        $path = $this->request->getpath();
        $method = $this->request->getMethod();
        $param = $this->request->getparam();
        

    }
}