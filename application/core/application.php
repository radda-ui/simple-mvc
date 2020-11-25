<?php 
namespace mvc\core;


class Application {
    
    public Router $router;
    public Request $request;
    public Response $response;
    public Database $database;
    public array $conf;


    function __construct(){
        $this->conf     = Config::getconfig();
        $this->request  = new Request();
        $this->responce = new Response();
        $this->$router  = new Router(
            $this->request,
            $this->response
        );
        $this->database = new Database($conf["db"]);
    }


    public function run()
    {
        $this->router->resolve();
    }
}