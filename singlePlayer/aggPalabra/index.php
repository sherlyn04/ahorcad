<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Agregar Palabra</title>
        <link rel="stylesheet" href="../../menus/style/estiloGeneral.css">
        <script type="text/javascript" src="funciones.js"></script>
    </head>
    <body onkeydown="enviarEnter(event)">
        <?php include_once("../../menus/juego/header.php"); ?>

        <div class="div1">
            <center>
                <br><br><br>

                <table>
                    <tr>
                        <td colspan="2"><center id="respuesta"></center></td>
                    </tr>
                    <tr>
                        <td><center><p>Palabra:</p></center></td>
                        <td><center><input type="text" id="txtPalabra" maxlength="25" size="15"/></center></td>
                    </tr>

                    <tr>
                        <td><center><p>Pista:</p></center></td>
                        <td><center><input type="text" id="txtPista" maxlength="35" size="15"/></center></td>
                    </tr>

                    <tr>
                        <td colspan="2"><center><button class="boton1" name="btnAggLetra" onclick="enviarPalabra();limpiar();">Agregar</button></center></td>
                    </tr>
                </table>
            <center>
        </div>
    </body>
</html>
