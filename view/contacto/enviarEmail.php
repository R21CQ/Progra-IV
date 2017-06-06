<?php

$nombre = $_POST['nombre'];
$email =$_POST['email'];
$telefono = $_POST['telefono'];
$consulta = $_POST['consulta'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "Su e-mail es: " . $email . " \r\n";
$mensaje .= "Su telefono es: " . $telefono . " \r\n";
$mensaje .= "Consulta: " . $consulta . " \r\n";

$asunto = 'Contacto desde Ciclo Taller Frank';

mail("giank0893@gmail.com", $asunto, utf8_decode($mensaje), $header);
echo "Mensaje enviado correctamente";
?>
