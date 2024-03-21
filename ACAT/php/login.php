<!-- login.php -->

<?php
session_start();

// Verifica si ya hay una sesión iniciada
if (isset($_SESSION['admin']) && $_SESSION['admin'] === true) {
    header("Location: ../php/panel_admin.php");
    exit();
}

// Verifica si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica las credenciales (aquí debes incluir tu lógica de verificación)
    $username = "admin"; // Cambia esto con el nombre de usuario correcto
    $password = "admin123"; // Cambia esto con la contraseña correcta

    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['admin'] = true;
        header("Location: ../php/panel_admin.php");
        exit();
    } else {
        $mensajeError = "Credenciales inválidas. Por favor, inténtalo de nuevo.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../PagCentroCultural/css/estilo.css">
    
</head>
<body>
    <div class="wrapper">
        <div class="logo-admin">
            <!-- Cambia la URL de la imagen según tu logo -->
            <img src="../PagCentroCultural/img/Logotipo circular blanco.png" alt="Logo">
        </div>
        <br>
        <form class="p-3 mt-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="username" id="username" placeholder="Usuario">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="password" id="pwd" placeholder="Contraseña">
            </div>
            <button type="submit" class="btn mt-3">Iniciar Sesión</button>
        </form>
        <?php if (isset($mensajeError)): ?>
            <p class="mensaje-errorAdmin"><?php echo $mensajeError; ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
