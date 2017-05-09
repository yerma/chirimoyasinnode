<?php
    $destino = "chirimoyaestudio@gmail.com";
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];

    $contenido = "Nombre: " . $nombre . "\nEmail: " . $email . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;

    mail($destino, $nombre . " | " . $email, $contenido);
?>
