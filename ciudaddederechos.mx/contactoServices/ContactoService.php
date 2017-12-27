<?php 


$para      = 'josewbmx@gmail.com';
$titulo    = 'Mensaje de la Pagina web ciudaddederechos.mx';
$mensaje   = 'Hola';
$cabeceras = 'From: webmaster@ciudaddederechos.mx' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);



?>