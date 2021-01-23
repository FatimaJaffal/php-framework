<?php

namespace app\core;

class Application {
    public static $ROOT_DIR;
    public $router;
    public $request;
    
    function __construct($rootPath) {
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->router = new Router($this->request);   
    }
    
    function run() {
        echo $this->router->resolve();
    }
}
