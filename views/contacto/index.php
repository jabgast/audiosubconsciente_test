<?php require 'views/header.php'?>
<div class="centerContainer">
    <form class="frm wdt_40 wht_bkgnd" action="">
        <input class="ten_shdw" type="text" placeholder="Nombre">
        <input class="ten_shdw" type="text" placeholder="correo">
        <input class="ten_shdw" type="phone" placeholder="+52 555 555 55 55">
        <textarea class="wdt_90" name="mensaje" id="mensaje" cols="25" rows="10"></textarea><br>
        <input type="submit" class="btn_ovl" name="enviar" value="enviar"> 
    </form>
</div>
<?php require 'views/footer.php'?>