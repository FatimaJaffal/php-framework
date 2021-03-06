<?php

namespace app\core;

class Router {
    protected $request;
    protected $response;
    protected $routes = [];
    
    function __construct($request, $response) {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback) {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback) {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve() {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;
        if(!$callback) {
            $this->response->setStatusCode(404);
            return $this->renderView('_404');
        } elseif (is_string($callback)) {
            return $this->renderView($callback);
        } else {
            return call_user_func($callback);
        }
    }
    
    public function renderView($view) {
        $layoutContent = $this->layoutContent();
        $viewContent = $this->viewContent($view);
        return str_replace('{{ content }}', $viewContent, $layoutContent);
    }
    
    protected function layoutContent() {
        ob_start();
        include_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean();
    }
    
    protected function viewContent($view) {
        ob_start();
        include_once Application::$ROOT_DIR."/views/$view.php";
        return ob_get_clean();
    }

}
