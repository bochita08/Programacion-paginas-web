<?php

// Validar si los campos requeridos están llenos
if (empty($_POST["nombre"]) || empty($_POST["apellido"]) || empty($_POST["email"]) || empty($_POST["mensaje"])) {
    echo "Por favor, complete todos los campos.";
    // Puedes redirigir al usuario a la página anterior o a otra página de tu elección
    exit;
}

$nombre_form = $_POST["nombre"];
$apellido_form = $_POST["apellido"];
$correo_form = $_POST["email"];
$mensaje_form = $_POST["mensaje"];

// Validar el formato del correo electrónico
if (!filter_var($correo_form, FILTER_VALIDATE_EMAIL)) {
    echo "El formato del correo electrónico es inválido.";
    exit;
}

$cuerpo_mail =
    "Nombre: " . $nombre_form . "\r\n" .
    "Apellido: " . $apellido_form . "\r\n" .
    "Correo Electronico: " . $correo_form . "\r\n" .
    "Mensaje: " . $mensaje_form;


if (mail("nahu_888@hotmail.com", "Mensaje enviado desde nuestro sitio web", $cuerpo_mail)) {
    header("Location: index4.php?bien");
} else {
    echo "Error al enviar el correo.";
}

// Insertar datos en la base de datos
require 'database.php';

$query = mysqli_prepare($conexion, "INSERT INTO consultas VALUES (DEFAULT, ?, ?, ?, ?)");
mysqli_stmt_bind_param($query, 'ssss', $nombre_form, $apellido_form, $correo_form, $mensaje_form);

if (mysqli_stmt_execute($query)) {
    header("Location: index4.php?bien");;
} else {
    echo "Error al insertar datos en la base de datos: " . mysqli_error($conexion);
}

mysqli_stmt_close($query);
mysqli_close($conexion);

header("Location: contacto.php?ok");
