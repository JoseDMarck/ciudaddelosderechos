<?php 


$para      = 'nestor@ciudaddederechos.mx';
$titulo    = 'Mensaje de la Pagina web ciudaddederechos.mx';
$mensaje   = "

<html>
<head>
  <title>Mensaje de La Pagina</title>
</head>
<body>



<b>Nombre:</b>". $nombre =  $_POST['nombre'] ."
<br/>
<b>Correo:</b>" . $correo =  $_POST['correo'] ."  
<br/>
<b>Mensaje:</b>" . $mensaje =  $_POST['descripcion'] ."
<br/>

</body>
</html>
";


$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$cabeceras .= 'From: ciudaddederechos <Contacto-ciudaddederechos@ciudaddederechos.mx>' . "\r\n";

mail($para, $titulo, $mensaje, $cabeceras);



?>



