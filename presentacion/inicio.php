<?php
session_name("inicio");
session_start();
$ol = $_SESSION["nombre"];
//echo  $ol;
if (isset($_SESSION["nombre"]) == false) {
    header("location:index.php");
}
$nombre = ucwords(strtolower($_SESSION['nombre']));
//echo $nombre;
?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Cursos virtuales, cursos de educación continua">
        <meta name="author" content="GNRenzo">
        <link rel="icon" href="../util/imagenes/batman__arkham_origins___icon_by_blagoicons-d6pbw8z.ico">

        <title>Cursos Virtuales</title>

        <!-- Bootstrap core CSS -->
        <link href="../util/bs/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="../util/bs/css/sticky-footer-navbar.css" rel="stylesheet">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <div class="jumbotron">
            <h1>Datos Ingresados Correctamente</h1><br>
            <h2><?php echo $nombre; ?></h2>
            <p>Bienvenido a nuestro sistema </p>
            <p><a class="btn btn-primary btn-lg" role="button" href="../presentacion/serrarSesion.php">Cerrar Sesion</a></p>
            <!--<p><a class="btn btn-primary btn-lg" role="button" href="../presentacion/index.php">Regresar a Inicio</a></p>-->
        </div>
<!--<a href="elurldondequieresquevayaelboton"> <img src="cualquierimagendeboton.png" onmouseover="this.src="cualquierotraimag... onmouseout="this.src="laprimeraimagendeb... " border="0" />--> 

        <!-- Bootstrap core JavaScript
         ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
<!--        <script src="../util/jquery/jquery.min.js"></script>
        <script src="../util/bs/js/bootstrap.js"></script>-->
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!--    <script src="../util/bs/js/ie10-viewport-bug-workaround.js"></script>-->
    </body>
</html>

