<?php
require_once 'libs/database.php';
class Registro extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('registro/index');
    }


    function nuevoUsuario(){
       /*
        $nombreUsuario = $_POST['nombreUsuario'];
        $email = $_POST['email'];
        $psswd = $_POST['psswd'];
        $psswdCnfrm = $_POST['psswdCnfrm'];
        $psswd_hash = sha1($psswd);
       */
      $nombreUsuario = $_POST['nombreUsuario'];
      $email = $_POST['email'];
      $psswd = $_POST['psswd'];
      $psswdCnfrm = $_POST['psswdCnfrm'];
      $psswd_hash = sha1($psswd);
        
      
      if($psswd != $psswdCnfrm){
            echo "<script>
            alert('Las contraseñas no coinciden');
            </script>";
        }
    

        //Insertar datos en arreglo
        $this->model->insertar([
            'nombreUsuario' => $nombreUsuario,
            'email' => $email,
            'psswd' => $psswd_hash
        ]);
    }
}
?>