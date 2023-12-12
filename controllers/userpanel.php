<?php

class userPanel extends Controller{
    function __construct(){
        parent::__construct();
        $this->view->user = [];
        $this->view->prod = [];
        
    }

    function render(){
        $user = $this->model->get();
        $this->view->user = $user;

        $prod = $this->model->getProd();
        $this->view->prod = $prod; 
        $this->view->render('userpanel/index');
    }
}
?>