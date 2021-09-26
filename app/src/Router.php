<?php
class Router {
    private static $get = [];
    private static $post = [];
    private static $patch = [];
    private static $delete = [];
    private static $options = [];

    public static function get($routeName, $handler){
        if(array_key_exists($routeName, self::$get))
            sendResponse(['message' => Router::routeExists($routeName), 'error' => true]);
        self::$get[$routeName] = [$handler[0], $handler[1]];
    }
    
    public static function post($routeName, $handler){
        if(array_key_exists($routeName, self::$post))
            sendResponse(['message' => Router::routeExists($routeName), 'error' => true]);
        self::$post[$routeName] = [$handler[0], $handler[1]];
    }
    
    public static function patch($routeName, $handler){
        if(array_key_exists($routeName, self::$patch))
            sendResponse(['message' => Router::routeExists($routeName), 'error' => true]);
        self::$patch[$routeName] = [$handler[0], $handler[1]];
    }
    
    public static function options($routeName, $handler){
        if(array_key_exists($routeName, self::$options))
            sendResponse(['message' => Router::routeExists($routeName), 'error' => true]);
        self::$options[$routeName] = [$handler[0], $handler[1]];
    }
    
    public static function delete($routeName, $handler){
        if(array_key_exists($routeName, self::$delete))
            sendResponse(['message' => Router::routeExists($routeName), 'error' => true]);
        self::$delete[$routeName] = [$handler[0], $handler[1]];
    }
    
    public static function getRoute(){
        $requestUri = explode('?', $_SERVER['REQUEST_URI'])[0];
        $requestMethod = strtolower($_SERVER['REQUEST_METHOD']);
        if(array_key_exists($requestUri, self::${$requestMethod}))
            return self::${$requestMethod}[$requestUri];
        throw new Exception("Unknown route");
    }

    public static function getAvailableRoutes(){
        $getKeys = array_keys(self::$get);
        $postKeys = array_keys(self::$post);
        $patchKeys = array_keys(self::$patch);
        $deleteKeys = array_keys(self::$delete);
        $optionKeys = array_keys(self::$options);

        return [
            'GET' => $getKeys,
            'POST' => $postKeys,
            'PATCH' => $patchKeys,
            'DELETE' => $deleteKeys,
            'OPTIONS' => $optionKeys
        ];
    }

    private static function routeExists($routeName){
        return "Route {$routeName}::{$_SERVER['REQUEST_METHOD']} already exists.";
    }

}