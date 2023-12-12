<?php
    class RegistroModel extends Model{

        public function __construct(){
            parent::__construct();
        }
 
        public function insertar($datos){
            $userValidation = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE nombreUsuario = :nombreUsuario;");
            $userValidation->execute(['nombreUsuario' => $datos['nombreUsuario']]);
            $userValRow = $userValidation->fetch();
            $mailValidation = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE email = :email;");
            $mailValidation->execute(['email' => $datos['email']]);
            $mailValRow = $mailValidation->fetch();            
            if($userValRow > 0){
                echo "<script>
                alert('El usuario ya existe');
                </script>";
            }else if($mailValRow > 0){
                echo "<script>
                alert('El email ya se encuentra registrado');
                </script>";
            }else{
                $query = $this->db->connect()->prepare(
                    "INSERT INTO usuarios(nombreUsuario,email,psswd)
                    VALUES (:nombreUsuario,:email, :psswd);");
                $query->execute(['nombreUsuario' => $datos['nombreUsuario'],
                'email' => $datos['email'],
                'psswd' => $datos['psswd']]);
                echo "<script>
                alert('Se ha registrado el usuario con exito');
                window.location.href = '".constant('URL')."login';
                </script>";
            }
        }
        
    }
    ?>