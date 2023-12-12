<?php
        class Database{

            private $host;
            private $db;
            private $user;
            private $psswd;
            private $charset;

            public function __construct(){
                $this->host =constant('HOST');
                $this->db =constant('DB');
                $this->user =constant('USER');
                $this->psswd =constant('PSSWD');
                $this->charset =constant('CHARSET');

            }

            public function connect(){
                
                try{
                    $connex =   "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
                    $options = [
                        PDO::ATTR_ERRMODE   => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_EMULATE_PREPARES  => false,
                    ];
                    $pdo = new PDO($connex, $this->user, $this->psswd, $options);
                    return $pdo;
                }catch(PDOExceptio $e){
                    print_r('Error de conexion: ' . $e->getMessage());
                }
            
            }
        }
?>