<?php
$servidor = "localhost"; // Hostname
$usuario = "root"; // Usuario por defecto en XAMPP/WAMP
$clave = ""; // Contraseña por defecto en XAMPP/WAMP es vacía
$baseDeDatos = "skinsavydb"; // Nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $clave, $baseDeDatos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

echo "Conexión exitosa  ";

// Recoger datos del formulario de manera segura
$nombre = $_POST['nombre'] ?? ''; // Asigna un valor vacío si la clave no existe
$apellidos = $_POST['apellidos'] ?? '';
$nusuario = $_POST['nusuario'] ?? '';
$correo = $_POST['correo'] ?? '';
$clave = isset($_POST['clave']) ? password_hash($_POST['clave'], PASSWORD_DEFAULT) : ''; 

// Preparar la consulta
$stmt = $conexion->prepare("INSERT INTO usuarios (nombre, nusuario, apellidos, correo, clave) VALUES (?, ?, ?, ?, ?)");

if (!$stmt) {
    die("Error en la preparación de la consulta: " . $conexion->error);
}

// Vincular parámetros
$stmt->bind_param("sssss", $nombre, $nusuario, $apellidos, $correo, $clave);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo " Datos insertados exitosamente.";
        echo "<script>alert('Registro exitoso. Puedes iniciar sesión ahora.'); window.location.href='index.html';</script>";
        
        } else {
        echo "<script>alert('Error enon.href='skinsavy.php';</scr el registro.');window.location.href='skinsavy.php';</script>";
        }    



// Cierra la conexión
$stmt->close();
$conexion->close();
?>





