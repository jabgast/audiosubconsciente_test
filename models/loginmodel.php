<?php
    class loginModel extends Model{

        public function __construct(){
            parent::__construct();
        }
 
        public function validate($datos){
            //$userValidation = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE nombreUsuario = :nombreUsuario;");
            //$userValidation->execute(['nombreUsuario' => $datos['nombreUsuario']]);
            //$userValRow = $userValidation->fetch();
            /*
            $mailValidation = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE email = :email;");
            $mailValidation->execute(['email' => $datos['email']]);
            $mailValRow = $mailValidation->fetch();
            $psswdValidate = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE psswd = :psswd;");
            $psswdValidate->execute(['psswd' => $datos['psswd']]);
            $pssValRow = $psswdValidate->fetch();
            */
            $userValidation = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE email = :email AND psswd = :psswd;");
            $userValidation->execute(['email' => $datos['email'],'psswd' => $datos['psswd']]);
            $usrValRow = $userValidation->fetch();
            if($usrValRow > 0){
                $_SESSION['id'] = $usrValRow[0];
                $_SESSION['usuarioName'] = $usrValRow[1];

                session_start(); //indica que seesta iniciando una session
                //se toma el id de sesion del logueo
                $iduser = $_SESSION['id'];
                $userName = $_SESSION['usuarioName'];

                echo "<script>
                alert('¡Bienvenido ".$_SESSION['usuarioName']."!');
                window.location.href = '".constant('URL')."';
                </script>";
            }else{
                echo "<script>
                alert('Password o usuario incorrecto');
                </script>";
            }
        }
        
    }
    ?>