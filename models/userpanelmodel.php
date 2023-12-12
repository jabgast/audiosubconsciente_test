<?php
include_once 'models/user.php';
class userpanelModel extends Model{
    public function __construct(){
        parent::__construct();
    }

    public function get(){
        $items = [];

        try{
            $query = $this->db->connect()->query("SELECT * FROM usuarios");

            while($row = $query->fetch()){
                $item = new User();
                $item->id =$row['id'];
                $id_user = $item->id =$row['id'];
                $item->nombreUsuario =$row['nombreUsuario'];
                $item->email =$row['email'];

                array_push($items, $item);
            }

            return $items;
        }catch(PDOException $e){
            return[];
        }
    }

    public function getProd(){
        $prods = [];

        try{
            $queryProds = $this->db->connect()->query("SELECT * FROM venta ");

            while($rowProd = $queryProds->fetch()){
                $prod = new Prod();
                $prod->id =$rowProd['id'];
                $prod->id_usario =$rowProd['id_usuario'];
                $prod->id_producto =$rowProd['id_producto'];
                $prod->fecha_compra =$rowProd['fecha_compra'];

                array_push($prods, $prod);
            }

            return $prods;
        }catch(PDOException $e){
            return[];
        }
    }

    
}
?>