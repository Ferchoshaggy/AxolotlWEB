<?php
$servername = "localhost"; // o la dirección de tu servidor MySQL
$username = "root";
$password = "";
$database = "formularioAxolotl";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

?>