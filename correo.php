<?php
     $destinatario = 'ezcosmetologa@gmail.com';
     $nombre = $_POST['Nombre'];
     $email = $_POST['Email'];
     $telefono = $_POST['Telefono'];
     $asunto = $_POST['Asunto'];
     $mensaje = $_POST['Mensaje'];

     $contenido = "Nombre: " . $nombre . "\nEmail: " . $email "\nTeléfono: " . $telefono . "\nAsunto: " . $asunto . "\nMensaje: " . $mensaje;
     mail($destinatario, "Contacto", $contenido);
     header("Location:gracias.html");


     ?>
