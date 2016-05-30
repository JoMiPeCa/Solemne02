<?php
include ('../librerias.php');

$usr=new Usuario("",$_POST['usuario'], $_POST['clave']);

if($usr->VerificaAcceso()){
	$_SESSION["oUsuario"]=  serialize($usr);
        header('Location:'.PATHURL);
}
else{
    header('Location:'.PATHURL.'login.php');
    
}
    
?>