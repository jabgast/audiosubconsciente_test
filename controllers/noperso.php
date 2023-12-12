<?php
class Noperso extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('noperso/index');
    }
}
?>