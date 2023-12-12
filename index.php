<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start(); //indica que seesta iniciando una session

//referencia de archivos
require_once 'libs/app.php';
require_once 'libs/controller.php';
require_once 'libs/view.php';
require_once 'libs/model.php';
require_once 'libs/database.php';



//REFERENCIA DE CONFIGURACION
require_once 'config/config.php';


//Crear objeto
$newApp = new App();        //se llama a constructor de clase App
?>