<?php 
include 'librerias.php';
?>
<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Acceso a ventas web</title>
   <script src="<?=PATHURL;?>js/jquery-latest.min.js" type="text/javascript"></script>
   <link rel="stylesheet" href="<?=PATHURL;?>css/font-awesome.min.css">
   <link rel="stylesheet" href="<?=PATHURL;?>css/sitio.css">
</head>
<body>
<div id="titlogin">
    Acceso a ventas Web
    <form action="accform/accLogin.php" method="post">
    <div>Usuario:</div><div><input name="usuario" type=text></div>
    <br>
    <div>Clave:</div><div><input name="clave" type="password"></div>
    <br>
    <input id="btn" type="submit" value=Acceder>
</form>
</div>
</body>
</html>

