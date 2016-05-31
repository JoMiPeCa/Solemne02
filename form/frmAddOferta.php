<!doctype html>

<html lang=''>
    <?php include("../head.php"); ?>
    <body>
        <?php include("../menu.php"); ?>
        <div id="titpagina"> Agregar Nueva Oferta </div>
        <div id="esptrabajo">
            <fieldset>
                <form method="POST" action="../accform/accOfertaAdd.php">
                    <table>
                        <tr>
                            <td>ID Oferta:</td>
                            <td><input type="number" name="idoferta" id="idoferta" required="true"></td>
                        </tr>
                        <tr>
                            <td>Descripcion: </td>
                            <td><input type="text" name="descripcion" id="descripcion" required="true"></td>
                        </tr>
                        <tr>
                            <td>Precio $: </td>
                            <td><input type="number" name="precio" id="precio" required="true"></td>
                        </tr>
                        <tr>
                            <td>Dias: </td>
                            <td><input type="number" name="dias" id="dias" required="true"></td>
                        </tr>
                        <tr>
                            <td>Fecha: </td>
                            <td><input type="date" name="fecha" id="fecha" required="false"></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="guardar"></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
        </div>
    </body>
</html>