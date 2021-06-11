<?php

//Comillas simples = ''
//Corchetes cuadrados = []
//Slash invertida = \

$servidor="localhost";
$usuario="root";
$clave='';
$baseDeDatos="formulario";

$enlace = mysqli_connect($servidor, $usuario,$clave, $baseDeDatos);

if (!$enlace) {
	echo "Error en la conexión con el servidor";
}

if(isset($_POST['registrarse'])){

	$nombre = $_POST['nombre'];
	$telefono= $_POST['telefono'];
	$correo= $_POST['correo'];
	$mensaje= $_POST['mensaje'];
    
    $insertarDatos = "INSERT INTO datos VALUES ('$nombre', 
                                                '$telefono',
                                                '$correo',
                                                '$mensaje')";

    $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

    if (!$ejecutarInsertar) {
    	echo"Error en La Línea de SQL";
    } 
     
}

header("Location: mensaje-de-envio.html");

?>