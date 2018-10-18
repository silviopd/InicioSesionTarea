<?php

class funciones {

    public function mensaje($mensaje, $tipo) {
        $estiloMensaje = "";
        switch ($estiloMensaje) {
//            <div class="alert alert-success" role="alert">...</div>
//<div class="alert alert-info" role="alert">...</div>
//<div class="alert alert-warning" role="alert">...</div>
//<div class="alert alert-danger" role="alert">...</div>
//                    
            case "S":
                $estiloMensaje = "alert alert-success";
                break;
            case "I":
                $estiloMensaje = "alert alert-info";
                break;
            case "A":
                $estiloMensaje = "alert alert-warning";
                break;
            case "S":
                $estiloMensaje = "alert alert-danger";
                break;
            default:
                $estiloMensaje = "alert alert-info";
                break;
        }
        $html_mensjae = '
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div align="center">
            <table class="table-bordered">
                <tr>
                    <td>'.$estiloMensaje.'</td>    
                </tr>
                
                <tr>
                    <td> <a href="javascript::windows.history.blakc()"> </a>
                    </td>
                </tr>
            </table>
            </div>
    </body>
</html>

            ';
    }

}
