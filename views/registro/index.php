<?php require 'views/header.php'?>
    <div class="globalContainer">
        <div class="centerContainer">
            <form class="frm wht_bkgnd" action="<?php echo constant('URL');?>registro/nuevoUsuario" method="POST">
                <input class="ten_shdw" type="text" placeholder="Nombre de usuario" name="nombreUsuario" required>
                <input class="ten_shdw" type="email" placeholder="correo@correo.com" name="email" required>
                <input class="ten_shdw" id="psswd" type="password" placeholder="contraseña" name="psswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,32}" required>
                <input class="ten_shdw" id="psswdC" type="password" placeholder="confirmar contraseña" name="psswdCnfrm" required>
                <input class="btn_ovl ten_shdw" type="submit" value="registar" name="registrar" onclick="validatePssw()">
            </form>
        </div>
    </div>
<?php require 'views/footer.php'?>