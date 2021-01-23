<?php

namespace app\core;

class Application {
    public static $ROOT_DIR;
    public $router;
    public $request;
    public $response;
            
    function __construct($rootPath) {
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);   
    }
    
    function run() {
        echo $this->router->resolve();
    }
}
