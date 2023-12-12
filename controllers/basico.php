<?php
class Basico extends Controller{
    function __construct(){
        parent::__construct();
        
    }

    function render(){
        $this->view->render('basico/index');
    }
    
}
?>