<?php
class View{
    function __construct(){
    }

    function render($nameRender){
        require 'views/'.$nameRender.'.php';
    }
}
?>