<?php
class Route {

    public static function start(){
        // контроллер и действие по умолчанию
        $controllerName = 'main';
        $actionName = 'index';
        $routes = explode('/', $_SERVER['REQUEST_URI']);
        var_dump($routes);
        // получаем имя контроллера
        /*if ( !empty($routes[1]) ){
            $controllerName = $routes[1];
        }

        // получаем имя экшена
        if ( !empty($routes[2]) ){
            $actionName = $routes[2];
        }*/

        // добавляем префиксы
        $modelName = 'Model_'.$controllerName;
        $controllerName = 'Controller_'.$controllerName;
        $actionName = 'action_'.$actionName;

        // подцепляем файл с классом модели (файла модели может и не быть)

        $modelFile = strtolower($modelName).'.php';
        $model_path = "app/models/".$modelFile;
        if(file_exists($model_path)){
            include "app/models/".$modelFile;
        }

        // подцепляем файл с классом контроллера
        $controllerFile = strtolower($controllerName).'.php';
        $controllerPath = "app/controllers/".$controllerFile;

        if(file_exists( $controllerPath)){
            include "app/controllers/".$controllerFile;
        } else {
        /*
        правильно было бы кинуть здесь исключение,
        но для упрощения сразу сделаем редирект на страницу 404
        */
            Route::ErrorPage404();
        }

        // создаем контроллер
        $Controller = new $controllerName;
        $action = $actionName;

        if(method_exists($Controller, $action)){
        // вызываем действие контроллера
            $Controller->$action();
        } else {
        // здесь также разумнее было бы кинуть исключение
            Route::ErrorPage404();
        }

    }

   public static function ErrorPage404(){
            $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
            header('HTTP/1.1 404 Not Found');
            header("Status: 404 Not Found");
            header('Location:'.$host.'404');
    }
}