<?php
include("../librerias.php");
$oOfe=new Oferta();
foreach ($_POST as $id){
	$oOfe->Elimina($id);	
};
?>

<script>
	document.location.href="<?=PATHURL?>form/frmDelOferta.php";
</script>