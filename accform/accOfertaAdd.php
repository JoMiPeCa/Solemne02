<?php
include("../librerias.php");
$oOfe=new Oferta();
$id = $_POST['idoferta'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$dias = $_POST['dias'];
$fecha = $_POST['fecha'];

$oOfe->Agrega($id,$descripcion,$precio,$dias,$fecha);	

?>

<script>
	document.location.href="<?=PATHURL?>form/frmAddOferta.php";
</script>