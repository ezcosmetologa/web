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
     echo "<script>alert('Correo Enviado Exitosamente')</script>";
     echo "<script>setTimeout(\"location.herf= 'index.html'\",1000)</script>";


     ?>

