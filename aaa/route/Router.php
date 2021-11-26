<?php

namespace Router;
require'../route/Route.php';


class Router {
public $url;
public $routes = [];

public function __construct($url)
    {
        $this->url = trim($url, '/');
    }



public function get(string $path, string $action)
    {
        $this->route['GET'][] = new Route($path, $action);
    }

   

public function run()
    {
        foreach ($this->route[$_SERVER['REQUEST_METHOD']] as $route) {
            if ($route->matches($this->url)) {
                return $route->execute();

            }

            return header('HTPP/1.0 404 Not found'); 





} }

}