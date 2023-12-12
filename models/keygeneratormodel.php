<?php



class keygeneratorModel extends Model{
    
    public function __construct(){
        parent::__construct();
    }

    public function insertKey($dato_key){
        echo"<script>
            alert('El key es ".$dato_key['id_key']."');
            </script>";
            echo"<script>
            alert('El producto es ".$dato_key['id_prod']."');
            </script>";
        $keyConsult = $this->db->connect()->prepare("SELECT * FROM venta WHERE id = :id_key");
        $keyConsult->execute(['id_key' => $dato_key['id_key']]);
        $keyValidation = $keyConsult->fetch();
        $keyUrsConsult = $this->db->connect()->prepare("SELECT * FROM usuarios WHERE id = :id_user");
        $keyUrsConsult->execute(['id_user' => $dato_key['id_user']]);
        $keyUrsVal = $keyUrsConsult->fetch();
        $prodConsult = $this->db->connect()->prepare("SELECT * FROM productos WHERE id = :id_prod");
        $prodConsult->execute(['id_prod' => $dato_key['id_prod']]);
        $prodConsultRow = $prodConsult->fetch();
        if($keyValidation > 0){
            echo"<script>
            alert('El key ".$dato_key['id_key']." ya existe');
            </script>";
        }else if($prodConsultRow != TRUE){
            echo"<script>
        alert('El producto NO existe');
        </script>";
        }else if($keyUrsVal != TRUE){
            echo"<script>
        alert('El usuario NO existe');
        </script>";
        }else if($keyUrsVal[0] < 0){
            echo"<script>
        alert('El usuario NO existe');
        </script>";
        }else{
            
            $keyInsertQ = $this->db->connect()->prepare("INSERT INTO venta (id,id_usuario, id_producto, fecha_compra) VALUES (:id_key, :id_user, :id_prod, :fecha_compra);");
            $keyInsertQ->execute(['id_key' => $dato_key['id_key'], 'id_user' => $dato_key['id_user'], 'id_prod' => $dato_key['id_prod'], 'fecha_compra' => $dato_key['fecha_compra']]);
            echo "<script>
            alert('el usuario  generado el key: ".$dato_key['id_key']." Fecha: ".$dato_key['fecha_compra']."');
            </script>";
            echo "<script>
            alert('¡Gracias por tu compra!');
            window.location.href = '../';
            </script>";
        }
    }
    
}
?>
