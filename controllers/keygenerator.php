<?php
class keyGenerator extends Controller{
    function __construct(){
        parent::__construct();
    }

    function render(){
        $this->view->render('keygenerator/index');
    }
    
    public function keyGen(){
        date_default_timezone_set('America/Mexico_City');
        $id_user = $_SESSION['id'];
        $id_prod = $_GET['id_prod'];
        $fecha_compra = date('Y-m-d H:i:s');
        $id_key = mt_rand(11111111,99999999);
        $this->model->insertKey([
        'id_key' => $id_key,
        'id_user' => $id_user,
        'id_prod' => $id_prod,
        'fecha_compra' => $fecha_compra]);
    }
}
?>