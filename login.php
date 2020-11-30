<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "formulario";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$conn) 
{
	die("No hay conexion: ".mysqli_connect_error());
	# code...
}
$usuario = $_POST["usuario"];
$distrito = $_POST["distrito"];
$edad = $_POST["edad"];

$query = mysqli_query($conn,"SELECT * FROM datos WHERE usuario ='".$usuario."'and distrito ='".$distrito."' and edad ='".$edad."' ");
$nr = mysqli_num_rows($query);

if ($nr == 1) {
	header ("Location: admi.html");
	echo "Bienvenido: " .$usuario;
}
else if ($nr == 0) {
	echo "No ha podido ingresar";
	# code...
}
?>