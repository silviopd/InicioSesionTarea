<!DOCTYPE html>
<?php
require '../negocio/numeroAleatorios.php';
$obj = new numeroAleatorios();
$ar = $obj->numeroAleatorio();

if (isset($_COOKIE["S"])){
    $correo_usuario = $_COOKIE["S"];
} else {
    $correo_usuario = "";
}

?>

<html lang="en">
    <script type="text/javascript">
        function clave(numero) {
            if (numero == 11) {
                document.form.campo.value = "";
            } else {
                document.form.campo.value += numero;
//                alert(numero);
                document.form.entrar.focus();
            }
            return;
        }</script>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Inicio de Sesion">
        <meta name="author" content="Darwin Omar Guevara Diaz">
        <link rel="icon" href="../util/imagenes/batman__arkham_origins___icon_by_blagoicons-d6pbw8z.ico">
        <title>Signin Template for Bootstrap</title>
        <!-- Bootstrap core CSS -->
        <link href="../util/bs/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../util/bs/css/signin.css" rel="stylesheet">
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src=../util/bs/js/ie10-viewport-bug-workaround.js"></script>
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <table align="center" width="50%">
                <thead>
                    <tr>
                        <!--primer cuadro-->
                        <td whi> 
                            <form class="form-signin" role="form" name="form" action="login.php" method="post">
                                <h2 class="form-signin-heading">Inicio de Sesion</h2>
                                <input type="email" class="form-control" placeholder="Email address" id="txtEmail" name="txtCorreo" value="<?php echo $correo_usuario ?>" required autofocus>
                                <br>
                                <input type="password" class="form-control" placeholder="Password" name="campo" required readonly="false">
                                <label class="checkbox">
                                    <input type="checkbox" value="S" name="chkRecordar"> Recordar
                                </label>
                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="entrar">Entrar</button>
                            </form>
                        </td>
                        <!--segundo cuadro-->
                        <td>
                            <form action="index.php" method="post" name="formulario" class="form-signin">
                                <!--<input type="text" name="campo" size="21"><br>-->
                                <input onclick="clave('<?php echo $ar[1];?>');" type="button" value="<?php echo $ar[1];?>" name="1" class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[2];?>');" type="button" value="<?php echo $ar[2];?>" name="2" class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[3];?>');" type="button" value="<?php echo $ar[3];?>" name="3" class="btn btn-lg"><br>
                                <input onclick="clave('<?php echo $ar[4];?>');" type="button" value="<?php echo $ar[4];?>" name="4" class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[5];?>');" type="button" value="<?php echo $ar[5];?>" name="5" class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[6];?>');" type="button" value="<?php echo $ar[6];?>" name="6" class="btn btn-lg"><br>
                                <input onclick="clave('<?php echo $ar[7];?>');" type="button" value="<?php echo $ar[7];?>" name="7"class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[8];?>');" type="button" value="<?php echo $ar[8];?>" name="8"class="btn btn-lg">
                                <input onclick="clave('<?php echo $ar[9];?>');" type="button" value="<?php echo $ar[9];?>" name="9" class="btn btn-lg"><br>
                                <input onclick="clave('<?php echo $ar[10];?>');" type="button" value="<?php echo $ar[10];?>" name="0" class="btn btn-lg">
                                <input onclick="clave('11');" type="button" value="Limpiar" name="Limpiar" class="btn btn-lg">
                                <!--<input type="reset" value="Borrar" name="borrar" class="btn btn-lg btn-primary btn-sm">-->
                            </form>
                            </div>
                        </td>
                    </tr>
                </thead>
            </table>



        </div> <!-- /container -->



        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!--        <script src="../util/bs/js/ie10-viewport-bug-workaround.js"></script>-->
    </body>
</html>
