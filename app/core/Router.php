<?php

namespace app\core;

class Router
{
    protected $routes = [];
    protected $params = [];

    public function __construct()
    {
        $arr = require __DIR__ . '/../config/routes.php';
        foreach ($arr as $key => $val) {
            $this->add($key, $val);
        }

    }

    public function run()
    {

        if ($this->match()) {

            $controllerName = '\app\controllers\\' .ucfirst($this->params['controller']) . "Controller";
//            $path = '\mvc\app\controllers\\' . $controllerName;

            $action = $this->params['action'] . 'Action';

            $controller = new $controllerName($this->params);

            if (method_exists($controller, $action))
                $controller->$action();

            else
                echo "404";

        }
        else
            echo '404';

    }

    private function add($route, $params)
    {

        $route = preg_replace('/{([a-z]+):([^\}]+)}/', '(?P<\1>\2)', $route);
        $route = '#^'.$route.'$#';
        $this->routes[$route] = $params;

    }

    private function match()
    {
        $url = trim($_SERVER['REQUEST_URI'], '/');

        foreach ($this->routes as $route => $params) {

            if (preg_match($route, $url, $matches)) {


                $this->params = $params;
                foreach ($matches as $key => $match) {
                    if (is_string($key)) {
                        if (is_numeric($match)) {
                            $match = (int) $match;
                        }
                        $this->params[$key] = $match;
                    }
                }
                return true;



            }
        }

        return false;
    }

}