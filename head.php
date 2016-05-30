<?php include("librerias.php");

if(!isset($_SESSION["oUsuario"])){
    header('Location:'.PATHURL.'login.php');  
}
else{
    $oUsr=  unserialize($_SESSION["oUsuario"]);
}
    
?>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>MenuMaker</title>

   <script src="<?=PATHURL;?>js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="<?=PATHURL;?>js/menumaker.min.js" type="text/javascript"></script>
   <script src="<?=PATHURL;?>js/script.js"></script>
   <link rel="stylesheet" href="<?=PATHURL;?>css/font-awesome.min.css">
   <link rel="stylesheet" href="<?=PATHURL;?>css/menu.css">
   <link rel="stylesheet" href="<?=PATHURL;?>css/sitio.css">
</head>