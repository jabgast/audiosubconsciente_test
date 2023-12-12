<?php
class Faqs extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('faqs/index');
    }
}
?>