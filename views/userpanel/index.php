<?php require 'views/header.php';
  include_once 'models/user.php';
  foreach($this->user as $fila){
      $user = new User();
      $user = $fila;

      $id_usuario = $user->id;
      $nombre_usuario = $user->nombreUsuario;
      $email_usuario = $user->email;
  }

  foreach($this->prod as $filaProd){
    $prod = new Prod();
    $prod = $filaProd;

    $id_prod = $prod->id;
    $id_usuario_prod = $prod->id_usuario;
    $id_prod_id = $prod->id_producto;
    $fecha_compra = $prod->fecha_compra;
    
}
?>
<div class="globalContainer dspl_flx_col">
        <div class="dash_container mgn_tp_5 mrg_btm_4 dspl_flx_row">
            <!--DASH ASSIDE-->
            <div class="dash_asside mint_shdw wht_bkg_80 dspl_flx_col">
                <div class="menu_container">
                    <div class="menu_item pdn_5 mgn_tp_15 mint_shdw_btn"><a href="#display_1">Yo ...</a></div>
                    <div class="menu_item pdn_5 mgn_tp_15 mint_shdw_btn"><a href="#display_2">Mis Audios</a></div>
                    <div class="menu_item pdn_5 mgn_tp_15 mint_shdw_btn"><a href="#display_3">Mis Intenciones</a></div>
                    <div class="menu_item pdn_5 mgn_tp_15 mint_shdw_btn"><a href="#display_4">Mis frecuencias</a></div>
                    <div class="menu_item pdn_5 mgn_tp_15 mint_shdw_btn"><a href="#display_5">Archivo</a></div>
                </div>
            </div>
            <!--DASH PANEL-->
            <div class="dash_panel mint_shdw wht_bkg_80 dspl_flx_col">
                <!--DISPLAY_1-->
                <div class="panel_display_h" id="display_1">
                    <div class="panel_display_left mrg_blc">
                    <div class="mrg_blc infoCard pdn_2">
                        <h1>Usuario: </h1>
                        <table>
                            <tr>
                                <td>Nombre: </td>
                                <td><?php echo $nombre_usuario;?></td>
                            </tr>
                            <tr>
                                <td>email: </td>
                                <td><?php echo $email_usuario;?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="mrg_blc infoCard pdn_2">
                        <h1>Mis audios: </h1>
                        <table>
                            <tr>
                                <td>folio: </td>
                                <td><?php echo $id_prod;?></td>
                                <td><?php echo $id_prod;?></td>
                                <td><?php echo $id_prod;?></td>
                            </tr>
                            
                            <tr>
                                <td>Paquete: </td>
                                <td><?php echo $id_prod_id;?></td>
                                <td><?php echo $id_prod_id;?></td>
                                <td><?php echo $id_prod_id;?></td>
                            </tr>

                            <tr>
                                <td>fecha de compra: </td>
                                <td>2023-11-23</td>
                                <td>2023-11-25</td>
                                <td>2023-11-28</td>
                            </tr>
                            
                        </table>
                    </div>
                    </div>
                    <div class="panel_display_right mrg_blc">
                    <div class="mrg_blc infoCard pdn_2">
                        <h1>Mis Intenciones: </h1>
                        <h5>Despertar Conciencia</h5>
                        <h5>Conexión neuronal</h5>
                        <h5>Enfoque y tranquilidad</h5>
                        <h5>Valentía</h5>
                        <a class="menu_item pdn_5 mrg_5 mint_shdw_btn" href="#">Agregar</a>
                    </div>
                    <div class="mrg_blc infoCard pdn_2">
                        <h1>Mis frecuencias: </h1>
                        <h5><b>174hz</b><i>elimina el dolor fisico y energetico</i></h5>
                        <h5><b>432hz</b><i>transmuta y sana el alma, mente y cuerpo</i></h5>
                        <h5><b>639hz</b><i>equilibra las relaciones fortalece el autoestima</i></h5>
                    </div>
                    <div class="mrg_blc infoCard pdn_2">
                        <h1>Mis deseos: </h1>
                        <h5>Vivir en Paz</h5>
                        <h5>Ser Rico</h5>
                        <h5>Tener inspiración</h5>
                        <h5>Estár más Activo</h5>
                        <h5>Amor</h5>
                        <h5>Dinero</h5>
                        <h5>Salud</h5>
                    </div>
                    </div>
                   

                    
                </div>
                <!--DISPLAY_2-->
                <div class="panel_display" id="display_2">
                <div class="mrg_blc infoCard pdn_2">
                        <h1>Mis audios: </h1>
                        <table>
                            <tr>
                                <td>folio: </td>
                                <td><?php echo $id_prod;?></td>
                                <td><?php echo $id_prod;?></td>
                            </tr>
                            
                            <tr>
                                <td>Paquete: </td>
                                <td>Abundante</td>
                                <td>Pelicula Mental</td>
                            </tr>

                            <tr>
                                <td>fecha de compra: </td>
                                <td><?php echo $fecha_compra;?></td>
                                <td><?php echo $fecha_compra;?></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
                <!--DISPLAY_3-->
                <div class="panel_display" id="display_3">
                    <h1>Mis Intenciones</h1>
                </div>
                <!--DISPLAY_4-->
                <div class="panel_display" id="display_4">
                    <div class="mrg_blc infoCard pdn_2">
                        <h1>Mis frecuencias: </h1>
                        <h5><b>174hz</b><i>elimina el dolor fisico y energetico</i></h5>
                        <h5><b>432hz</b><i>transmuta y sana el alma, mente y cuerpo</i></h5>
                        <h5><b>639hz</b><i>equilibra las relaciones fortalece el autoestima</i></h5>
                        <h5><b>625hz</b><i>hertz ayuda al funcionamiento del hígado quitar de todos lo audios</i></h5>
                        <h5><b>528hz</b><i>hertz propicia la regeneración del adn</i></h5>
                    </div>
                </div>
                <!--DISPLAY_5-->
                <div class="panel_display" id="display_5">
                    <h1>Archivo</h1>
                </div>
            </div>
        </div>
    </div>

<?php require 'views/footer.php'?>