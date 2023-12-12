<?php
class Abundante extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('abundante/index');
    }
    
}
?>