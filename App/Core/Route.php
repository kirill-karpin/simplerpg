<?php
class App_Core_Route {
    public static function start(){
        // контроллер и действие по умолчанию
        $controllerName = 'Main';
        $actionName = 'index';
        $link = $_SERVER['REQUEST_URI'];

        $routes = explode("/",$link);

//        if ( (preg_match_all('#(.*)\/$#U',$link,$route)) > 0 ) {
//
//            $link = $route[1][0];
//        };


        if (!empty($routes[1]) && (!stripos($routes[1], "XDEBUG_SESSION_START"))){
            $controllerName = ucfirst($routes[1]);
        }

        if (!empty($routes[2])){
            $actionName = $routes[2];
        }

        $controllerName = 'App_Controllers_'.$controllerName;

        $Controller = new $controllerName;
        if(method_exists($Controller, $actionName)){
                   $Controller->$actionName();
        } else {
        // здесь также разумнее было бы кинуть исключение
           Route::ErrorPage404();
        }

    }
    public static function ErrorPage404(){
        require APP . '/App/Views/404.php';
    }


}