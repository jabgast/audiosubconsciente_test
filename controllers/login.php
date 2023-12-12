<?php
class Login extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('login/index');
    }

    function iniciaSesion (){
        /*
         $nombreUsuario = $_POST['nombreUsuario'];
         $email = $_POST['email'];
         $psswd = $_POST['psswd'];
         $psswdCnfrm = $_POST['psswdCnfrm'];
         $psswd_hash = sha1($psswd);
        */

       $email = $_POST['email'];
       $psswd = $_POST['psswd'];
       $psswd_hash = sha1($psswd);
         
        
         //Insertar datos en arreglo
         $this->model->validate([
             'email' => $email,
             'psswd' => $psswd_hash
         ]);
     }

}
?>