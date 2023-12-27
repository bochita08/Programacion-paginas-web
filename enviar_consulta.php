<?php

$nombre_form= $_POST ["nombre"];
$apellido_form= $_POST ["apellido"];
$correo_form= $_POST ["email"];
$mensaje_form= $_POST ["mensaje"];

$cuerpo_mail =
"Nombre: " .$nombre_form."\r\n".
"Apellido: " .$apellido_form."\r\n".
"Correo Electronico: " .$correo_form."\r\n".
"Mensaje: " .$mensaje_form;

mail("nahu_888@hotmail.com", "Mensaje enviado desde nuestro sitio web", $cuerpo_mail);

