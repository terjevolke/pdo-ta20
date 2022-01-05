<?php
class Request
{
    public static function uri()
    {
         return trim
            (parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'
        );
                try{
            require_once $router->direct($uri);
        } catch (Exception $e) {
            echo "Sellist lehte pole";
        }
    }
    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
