<?php
class Elite extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('elite/index');
    }
}
?>