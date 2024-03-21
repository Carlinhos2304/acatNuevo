<?php
session_start();

// Verifica si el usuario ha iniciado sesión como administrador
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: ../php/login.php");
    exit();
}

// Funciones para manejar las solicitudes (por implementar)
function obtenerSolicitudesPendientes($conex) {
    // Lógica para obtener las solicitudes pendientes desde la base de datos
    // Retorna un array de solicitudes pendientes

    // Realiza la consulta SQL para obtener las solicitudes pendientes
    $consulta = "SELECT id, nombre, partitura FROM partituras WHERE estado = 'pendiente'";
    $resultado = mysqli_query($conex, $consulta);

    if (!$resultado) {
        die("Error al obtener solicitudes pendientes: " . mysqli_error($conex));
    }

    // Procesa los resultados de la consulta y devuelve un array
    $solicitudesPendientes = array();
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $solicitudesPendientes[] = $fila;
    }

    return $solicitudesPendientes;
}


// Funciones para manejar las partituras (por implementar)
function obtenerPartituras($conn) {
    $partituras = array();

    // Lógica para obtener las partituras desde la base de datos
    $query = "SELECT id, nombre FROM partituras";
    $result = mysqli_query($conn, $query);

    // Verifica si la consulta fue exitosa
    if ($result) {
        // Obtén los datos y guárdalos en el array $partituras
        while ($row = mysqli_fetch_assoc($result)) {
            $partituras[] = $row;
        }

        // Libera el resultado de la consulta
        mysqli_free_result($result);
    }

    return $partituras;
}

// Funciones para manejar las notificaciones (por implementar)
function obtenerNotificaciones($conex) {
    $consulta = "SELECT fecha, CONCAT(nombre, ' solicitó la partitura ', partitura) AS mensaje
                 FROM partituras
                 WHERE estado = 'pendiente'";
    $resultado = mysqli_query($conex, $consulta);

    if (!$resultado) {
        die("Error al obtener notificaciones: " . mysqli_error($conex));
    }

    $notificaciones = array();
    while ($fila = mysqli_fetch_assoc($resultado)) {
        $notificaciones[] = $fila;
    }

    return $notificaciones;
}


// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cultural";

// Crear conexión
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Verificar la conexión
if (!$conn) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

// Obtener solicitudes pendientes
$solicitudesPendientes = obtenerSolicitudesPendientes($conn);

// Obtener partituras
$partituras = obtenerPartituras($conn);

// Obtener notificaciones
$notificaciones = obtenerNotificaciones($conn);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>
    <link rel="stylesheet" href="../PagCentroCultural/css/estilo.css">
</head>
<body class="body-panelAdmin">
    <div class="container-panel">
        <!-- Contenido principal -->
        <div class="main-content">
            <h2>Bienvenido al Panel de Administración</h2>
            
            <!-- Sección de Gestión de Solicitudes -->
            <div id="gestionSolicitudes" class="seccion-panel">
                <h3>Gestión de Solicitudes</h3>
                <?php if (!empty($solicitudesPendientes)): ?>
                    <ul class="lista-solicitudes">
                        <?php foreach ($solicitudesPendientes as $solicitud): ?>
                            <li class="solicitud-item">
                                <?php
                                $nombre_partitura = pathinfo($solicitud['partitura'], PATHINFO_FILENAME); // Obtener solo el nombre del archivo sin la ruta ni la extensión
                                ?>
                                <?php echo $solicitud['nombre']; ?> solicitó la partitura <?php echo $nombre_partitura; ?>
                                <form action="../php/procesar_solicitud.php" method="POST">
                                    <input type="hidden" name="solicitud_id" value="<?php echo $solicitud['id']; ?>">
                                    <button type="submit" class="boton-procesar">Procesar Solicitud</button>
                                </form>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>No hay solicitudes pendientes.</p>
                <?php endif; ?>
            </div>
                
            <!-- Sección de Gestión de Partituras -->
            <div id="gestionPartituras" class="seccion-panel">
                <h3>Gestión de Partituras</h3>
                <?php if (!empty($partituras)): ?>
                    <form action="../php/enviar_partituras.php" method="POST">
                        <ul class="lista-partitura">
                            <?php foreach ($partituras as $partitura): ?>
                                <li class="partitura-item">
                                    <label class="checkbox-label">
                                        <input type="checkbox" name="partituras[]" value="<?php echo $partitura['id']; ?>">
                                        <?php echo $partitura['nombre']; ?>
                                    </label>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                        <!-- Formulario para enviar partituras -->
                        <button type="submit" class="enviar-partitura-btn">Enviar Partituras Seleccionadas</button>
                    </form>
                <?php else: ?>
                    <p>No hay partituras disponibles.</p>
                <?php endif; ?>
            </div>
                
            <!-- Sección de Notificaciones -->
            <div id="notificaciones" class="seccion-panel">
                <h3>Notificaciones</h3>
                <?php if (!empty($notificaciones)): ?>
                    <ul class="notificaciones-list">
                        <?php foreach ($notificaciones as $notificacion): ?>
                            <li class="notificaciones-item">
                                <strong><?php echo $notificacion['fecha']; ?></strong>
                                <?php echo $notificacion['mensaje']; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php else: ?>
                    <p>No hay notificaciones.</p>
                <?php endif; ?>
            </div>
            
            <!-- Botón de cerrar sesión -->
            <form action="../php/logout.php" method="POST">
                <button type="submit" class="cerrar-sesion-btn">Cerrar Sesión</button>
            </form>
        </div>
    </div>
</body>
</html>
