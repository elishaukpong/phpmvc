<?php

class Router
{
    public static $routes = [ ];

    public static function add($uri , $view){
        self::$routes[$uri] = $view;
    }

    public static function listRoutes()
    {
        return self::$routes;
    }
}