<?php
     $destinatario = 'ezcosmetologa@gmail.com';
     $nombre = $_POST['Nombre'];
     $email = $_POST['Email'];
     $telefono = $_POST['Telefono'];
     $asunto = $_POST['Asunto'];
     $mensaje = $_POST['Mensaje'];

     $header"Enviado desde sitio web www.ezcosmetologa.com.ar";
     $mensajecompleto = $mensaje . "\nAtentamente: " . $nombre;

     mail($destinatario, $asunto, $mensajecompleto, $header);
     header("Location:gracias.html");


     ?>
