<?php
class Request
{
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
        try{
            require_once $router->direct($uri);
        } catch (Exception $e) {
            echo "Sellist lehte pole";
        }
    }
}
