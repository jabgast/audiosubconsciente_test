<?php
//12aB@#981
require_once 'controllers/errores.php';
class App{
    function __construct(){
        //echo "<p>Mensaje desde App</p>";

        //obteniendo URL
        $url = isset($_GET['url']) ? $_GET['url']: null;
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        //var_dump($url);

        //router para Main sin definir controlador
        if(empty($url[0])){
            $classController = 'controllers/main.php';  //direcciona a main
            require_once $classController;
            $controller = new Main();
            $controller->loadModel('main');             //Llamado al model
            $controller->render();
            return false;
        }
        $classController = 'controllers/'.$url[0].'.php'; 
        //Se valida el url
        if(file_exists($classController)){
            require_once $classController;

        //inicialzia el modelo del controlador
            $controller = new $url[0];
            $controller->loadModel($url[0]);
        //validar si existe un metodo dentro de la url obtenida
        if(isset($url[1])){
        //if(method_exists($controller, $url[1])){
            $controller->{$url[1]}();
        }else{
            $controller->render();
        }
        }else{
            $controller = new Errores();
        }
    }
}
?>