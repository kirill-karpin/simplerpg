<?php
class App_Core_Route {
    public static function start(){
        // контроллер и действие по умолчанию
        $controllerName = 'Main';
        $actionName = 'index';
        $link = $_SERVER['REQUEST_URI'];


        if ( (preg_match_all('#(.*)\?#U',$link,$route)) > 0 ) {

            $link = $route[1][0];
        };

        if (!empty($_GET)){
            $actionName = "getRequest";
        }

        if (!empty($_POST)){
            $actionName = "getRequest";
        }

        $routes = explode('/', $link);

        if (!empty($routes[1])){
            $controllerName = ucfirst($routes[1]);
        }
        $controllerName = 'App_Controllers_'.$controllerName;


        $Controller = new $controllerName;
        $action = $actionName;

        if(method_exists($Controller, $action)){
                   $Controller->$action();
        } else {
        // здесь также разумнее было бы кинуть исключение
           Route::ErrorPage404();
        }

    }
    public static function ErrorPage404(){
        require APP . '/App/Views/404.php';
    }


}