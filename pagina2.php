<html>

<head>
  <title>Captura de datos del form</title>
</head>

<body>

<?php

$nombre = $_REQUEST['nombre'];

$apellido = $_REQUEST['apellido'];

$edad = $_REQUEST['edad'];

$editor_codigo = $_REQUEST['editor_codigo'];

$sistema_operativo = $_REQUEST['sistema_operativo'];


  echo "Bienvenido : ";
  echo $nombre . " ". $apellido;
  echo "<br>"; 
  echo "Ud. tiene: ";
  echo $edad .  " años";;
  echo "<br>"; 
  echo "Su editor_codigo preferido es: ";
  echo $editor_codigo;
  echo "<br>"; 
  echo "Su sistema_operativo que utiliza es: ";
  echo $sistema_operativo;
  ?>

</body>

</html>