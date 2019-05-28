<?php

namespace App\Core;

class Router
{
    protected static $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function get($uri, $controller)
    {
        static::$routes['GET'][$uri] = $controller;
    }

    public static function post($uri, $controller)
    {
        static::$routes['POST'][$uri] = $controller;
    }

    public static function load()
    {
        require __DIR__ . '/../routes/web.php';
    }

    public static function direct($uri, $requestType){
        static::load();
        if(array_key_exists($uri, static::$routes[$requestType])){
            return (new static)->callAction(
                ...explode('@', static::$routes[$requestType][$uri])
            );
        }

        throw new Exception('No routes defined');
     }

     
     public function callAction($controller, $action)
     {
         $controller = new $controller;

         if(! method_exists($controller, $action)){
            throw Exception("{$controller} does not respond to the {$action} action.");
         }
         return $controller->$action();
     }

     public function routes()
     {
         return $this->routes;
     }
}