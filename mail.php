<?php
$para      = 'dragost11@gmail.com';
$titulo    = 'El título';
$mensaje   = 'Hola';
$cabeceras = 'From: webmaster@lossecretosdetualmohada.com' . "\r\n" .
    'Reply-To: webmaster@lossecretosdetualmohada.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($para, $titulo, $mensaje, $cabeceras);
?>