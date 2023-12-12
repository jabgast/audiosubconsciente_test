<?php require 'views/header.php'?>
<div class="centerContainer">
<form class="frm wht_bkgnd" action="<?php echo constant('URL');?>login/iniciaSesion" method="POST">
        <input class="ten_shdw" type="email" placeholder="correo" name="email">
        <input class="ten_shdw" type="password" placeholder="password" name="psswd">
        <input class="btn_ovl ten_shdw" type="submit" value="iniciar" name="iniciar">
        <a class="btn_ovl pad_h_2 pad_v_2 wdt_90 ten_shdw" href="<?php echo constant('URL');?>registro">registrate</a>
    </form>
</div>
<?php require 'views/footer.php'?>