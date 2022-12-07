<?php

class Route {

 protected $routes = [
        'GET' =>[],
        'POST' => []
    ];

    public static function load($file) {

        $rout = new static;
        require $file;
        return $rout;
    }

    public function defin($routes) {
        $this->routes = $routes;
    }

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct ($uri) {

        if(array_key_exists($uri, $this->routes[$requestType])) {

            return $this->routes[$requestType][$uri];
        }

        throw new Exception("Not defined rout!");

        }
}