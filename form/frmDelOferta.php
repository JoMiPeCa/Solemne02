<?php
include '../clases/Oferta.php';
$oOfe = new Oferta();
?>
<html lang=''>
    <?php include("../head.php"); ?>
    <body>
        <?php include("../menu.php"); ?>
        <div id="titpagina"> Eliminar Oferta </div>
        <div id="esptrabajo">
            <form method="post" action="accform/accOfertaDel.php">
                <?php
                While ($Registro = $oOfe->Selecciona()) {
                    ?>
                    <input type="checkbox" name=elimina<?= $Registro->IdOferta() ?> value="<?= $Registro->IdOferta() ?>">
                    <?= $Registro->Descripcion() ?>/<?= $Registro->Dias() ?>/<?= $Registro->Precio() ?>
                    <br>
                    <?php
                }
                ?>
                <input type="submit" value="Eliminar">
            </form>
        </div>
    </body>
</html>


