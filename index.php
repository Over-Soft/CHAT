<?php
session_start();
include_once "php_conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Control de Entrada</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
    body {
        padding-top: 180px;
        padding-bottom: 170px;
  background-color:#142849;
  background-image:-webkit-radial-gradient(center, circle cover, #165387, #142849);
  background-repeat:no-repeat;
      }



      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.ico">
  </head>

  <body>

    <div class="container">
    <form name="form1" method="post" action="" class="form-signin">
        <center><img src="img/favicon.ico" width="100" height="100"></center><br>
        <?php
if (!empty($_POST['usu']) and !empty($_POST['con'])) {
    $usu = $_POST['usu'];
    $con = $_POST['con'];

    $pa = $conexion->prepare("SELECT * FROM usuario WHERE usu='$usu' and con='$con'");
    $pa->execute();
    $res = $pa->fetchAll();
    if ($res) {
        $_SESSION['nombre'] = $usu;

        echo '<center><strong>Bienvenido<br>' . $_SESSION['nombre'] . '</strong></center><br>';
        echo '<center><img src="img/ajax-loader.gif"></center><br>';
        echo '<meta http-equiv="refresh" content="0;url=chat.php">';

    } else {
        echo mensajes('Usuario y Contraseña Incorrecto<br>', 'rojo');
        echo '<center><a href="index.php" class="btn"><strong>Intentar de Nuevo</strong></a></center>';
    }
} else {
    echo '  <input type="text" name="usu" class="input-block-level" placeholder="Documento" autocomplete="off" required>
          <input type="password" name="con" class="input-block-level" placeholder="Password" autocomplete="off" required>
          <div align="right"><button class="btn btn-large btn-primary" type="submit"><strong>Entrar</strong></button></div>';
}
?>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>
