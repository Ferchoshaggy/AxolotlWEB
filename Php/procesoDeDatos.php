<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['telefono'])) {

$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$telefono = $_POST['telefono'];
$mensaje = $_POST['mensaje'];

        // Crear la conexión
        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

         // Preparar la consulta SQL
         $sql = "INSERT INTO datos (Nombre, Email, Telefono, Mensaje)
         VALUES ('$nombre', '$email', '$telefono', '$mensaje')";

                 // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
       
        } else {

        }

        // Cerrar la conexión
        $conn->close();

}else{
    echo "Por favor, completa todos los campos del formulario.";
}

header("Location: ../index.php" );

}
?>