<!DOCTYPE html>
<?php
//session_start(); //indica que seesta iniciando una session
//se toma el id de sesion del logueo
$iduser = $_SESSION['id'];
$userName = $_SESSION['usuarioName'];
?>
<html>
<head>
    <title>Audiosubconsciente</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <!--FONT AWESOME-->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
   <!--FONT OPEN SANS-->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
   <!--FONT MUSEO MODERNO-->
   <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="<?php echo constant('URL');?>public/styles/styles.css">
   <link rel="stylesheet" href="<?php echo constant('URL');?>public/styles/responsive.css">
   <link rel="stylesheet" href="<?php echo constant('URL');?>public/styles/animate.css">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!--ICONOS-->
   <link href="<?php echo constant('URL');?>public/fonts/css/fontawesome.min.css" rel="stylesheet">
   <link href="<?php echo constant('URL');?>public/fonts/css/brands.css" rel="stylesheet">
   <link href="<?php echo constant('URL');?>public/fonts/css/solid.css" rel="stylesheet">
   <link rel="shortcut icon" href="<?php echo constant('URL');?>public/img/favicon.png">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
<div id="navigator">
    <div class="menu">
    <a href="#navigator" class="bt-menu"><i class="fa fa-duotone fa-bars"></i></a>
    <a href="<?php echo constant('URL');?>"><img src="<?php echo constant('URL');?>public/img/logo.png" class="logomenu"></a>
    </div>
    <header>
    <nav>
        <?php if($userName != ""){
            echo "
                <div class='nav-elmt subNavSub'><a href='#'>¡Hola ".$userName."!</a>
                     <div class='sub-nav-opt'>
                        <a href='".constant('URL')."userpanel'>Mi Santuario</a>
                        <a href='views/salir.php'>salir</a>
                    </div>
                </div> 
            ";
            }else{echo "";}
        ?>
        <div class="nav-elmt"><a href="<?php echo constant('URL');?>"><i class="fa fa-home"></i>home</a></div>
        <div class="nav-elmt subNav"><a class="subContLnk"href="#"><i class="fa fa-headphones-alt"></i>audios</a>
            <div class="sub-nav" id="sub-nav">
                <a href="<?php echo constant('URL');?>personaliza">personalizable</a>
                <a href="<?php echo constant('URL');?>noperso">no personalizable</a>
                <div class="nav-elmt subNavSub"><a href="#">paquetes</a>
                     <div class="sub-nav-opt">
                        <a href="<?php echo constant('URL');?>abundante">abundante</a>
                        <a href="<?php echo constant('URL');?>elite">elite</a>
                        <a href="<?php echo constant('URL');?>basico">basico</a>
                    </div>
                </div> 
            </div>
            
        </div>
        <div class="nav-elmt"><a href="<?php echo constant('URL');?>blog"><i class="fa fa-brands fa-blogger"></i>Blog</a></div>
        <div class="nav-elmt"><a href="<?php echo constant('URL');?>contacto"><i class="fa fa-mail-bulk"></i>contacto</a></div>
        <div class="exit"><a href="<?php echo constant('URL');?>login">
        <?php 
            if($userName != ""){
                echo "<i class='fa fa-door-open'></i><a class='' href='views/salir.php'>salir</a>";
                }else{
                echo "<i class='fa fa-solid fa-user'></i>Iniciar Sesion";
                }
                ?></a></div>
        <div class="nav-elmt"><a href="<?php echo constant('URL');?>faqs"><i class="fa fa-solid fa-file-circle-question"></i>FAQs</a></div>
    </nav>
    </header>
</div>