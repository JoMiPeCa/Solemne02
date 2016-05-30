<div id="cssmenu">
  <ul>
     <li class="active"><a href="<?=PATHURL;?>"><span><i class="fa fa-fw fa-home"></i> Inicio</span></a></li>
     <li class="has-sub"><a href="#"><span><i class="fa fa-fw fa-bars"></i> Administrar Ventas</span></a>
        <ul>
           <li><a href="<?=PATHURL;?>form/frmAddOferta.php"><span><i class="fa fa-fw fa-sign-in"></i> Agregar Oferta</span></a></li>
           <li><a href="<?=PATHURL;?>form/frmdelOferta.php"><span><i class="fa fa-fw fa-recycle"></i> Eliminar Oferta</span></a></li>
           <li><a href="<?=PATHURL;?>form/frmUpdVenta.php"><span><i class="fa fa-fw fa-pencil"></i> Modifica Venta</span></a></li>
        </ul>
     </li>
     <li class="has-sub"><a href="#"><span><i class="fa fa-fw fa-cog"></i> Opciones</span></a>
        <ul>
           <li><a href="<?=PATHURL;?>form/frmPrefUsuario.php"><span><i class="fa fa-fw fa-child"></i> Preferencias del usuario</span></a></li>
        </ul>
     </li>
     <li><a href="#"><span><i class="fa fa-fw fa-phone"></i> Contacto</span></a></li>
  </ul>
</div>
<div id="titlogout">
    <?php 
    echo $oUsr->getNombre();
    ?>
    <a href="#">Salir</a>
</div>
