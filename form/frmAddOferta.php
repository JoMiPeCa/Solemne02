<!doctype html>
<?php
$oOferta = new Oferta();
?>
<html lang=''>
    <?php include("../head.php"); ?>
    <body>
        <?php include("../menu.php"); ?>
        <div id="titpagina"> Agregar Nueva Oferta </div>
        <div id="esptrabajo">
            <fieldset>
                <form method="POST" action="accform/accOfertaAdd.php">
                    <tr>
                        <td>ID Oferta: <input type="number" name="idoferta" id="idoferta" required="true"</td>
                        <td>Descripcion: <input type="text" name="descripcion" id="descripcion" required="true"</td>
                        <td>Precio $: <input type="number" name="precio" id="precio" required="true"</td>
                        <td>Dias: <input type="number" name="dias" id="dias" required="true"</td>
                        <td>Fecha: <input type="date" name="fecha" id="fecha" required="false"</td>
                    </tr></br>
                    <tr>
                        <td><input type="submit" name="guardar"></td>
                    </tr>
                </form>

            </fieldset>
        </div>
    </body>
</html>