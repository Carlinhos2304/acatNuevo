<!-- php/autenticar.php -->

<?php
session_start();

$usuario_valido = "admin";
$contrasena_valida = "admin123"; // Recuerda usar contraseñas seguras en la práctica

if ($_POST['usuario'] === $usuario_valido && $_POST['contrasena'] === $contrasena_valida) {
    $_SESSION['admin'] = true;
    header("Location: ../php/panel_admin.php");
    exit();
} else {
    $_SESSION['mensaje_error'] = "Credenciales incorrectas. Inténtalo de nuevo.";
    header("Location: ../php/login.php");
    exit();
}
?>
