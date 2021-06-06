<?php

//Comillas simples = ''
//Corchetes cuadrados = []
//Slash invertida = \

//Llamando a los campos
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

//Datos para el correo
$destitanatario = "manuel.gerardo.delatour@gmail.com"


$carta = "De: $nombre \n";
$carta = "Correo: $correo \n";
$carta = "Telefono: $telefono \n";
$carta = "Mensaje: $mensaje";

//Enviando mensaje
mail($destitanatario, $asunto, $carta);
header('Location:mensaje-de-envio.html')

?>