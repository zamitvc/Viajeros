<?php
  $destino="AT60800647@idat.edu.pe";
  $nombres=$_POST["nombres"];
  $apellidos=$_POST["apellidos"];
  $correo=$_POST["correo"];
  $msje=$_POST["msje"];
  $contenido="Nombres y Apellidos: ".$nombres."\nCorreo: ".$correo. "\napellidos: ".$apellidos."\nmsje: ".$msje;

  if (mail($destino,"Mensaje",$contenido));
  echo "<script>alert('Gracias por su mensaje')</script>";
  echo "<script>window.location.href=('index.html')</script>";
?>