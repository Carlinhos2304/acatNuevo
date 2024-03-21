<?php
session_start();

// Verifica si el usuario ha iniciado sesión como administrador
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: ../php/login.php");
    exit();
}

// Agrega esta línea para definir la ruta del directorio de partituras
$directorio_partituras = __DIR__ . "/partituras/";

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['solicitud_id'])) {
    // Conecta a la base de datos (ajusta según tu configuración)
    $conex = mysqli_connect("localhost", "root", "", "cultural");

    if (!$conex) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }

    // Obtiene la información de la solicitud
    $solicitud_id = $_POST['solicitud_id'];
    $partitura_nombre = $_POST['partitura_nombre'];

    // Lógica para procesar la solicitud
    // ...

    // Obtiene la información de la partitura para enviarla por correo
    $info_partitura_query = "SELECT nombre, email, partitura FROM partituras WHERE id = $solicitud_id";
    $info_partitura_resultado = mysqli_query($conex, $info_partitura_query);

    if ($info_partitura_resultado && mysqli_num_rows($info_partitura_resultado) > 0) {
        $info_partitura = mysqli_fetch_assoc($info_partitura_resultado);

        $to = $info_partitura['email'];
        $subject = "Solicitud Procesada";
        $message = "Estimado/a {$info_partitura['nombre']},\n\n";
        $message .= "Su solicitud para la partitura $partitura_nombre ha sido procesada.\n\n";
        $message .= "¡Gracias!\n";

        $archivo_partitura = $directorio_partituras . $info_partitura['partitura'];

        // Verifica si el archivo existe antes de intentar abrirlo
        if (file_exists($archivo_partitura)) {
            $file_content = file_get_contents($archivo_partitura);

            // Headers para el correo
            $boundary = uniqid('np'); // Mover aquí la definición de $boundary
            $headers = "From: marcelosalamanca2003@gmail.com\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

            // Línea divisoria
            $multipart_message = "--$boundary\r\n";
            $multipart_message .= "Content-Type: text/plain; charset=UTF-8\r\n";
            $multipart_message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
            $multipart_message .= $message . "\r\n";

            // Adjuntar el archivo al mensaje
            $multipart_message .= "--$boundary\r\n";
            $multipart_message .= "Content-Type: application/pdf; name=\"" . basename($archivo_partitura) . "\"\r\n";
            $multipart_message .= "Content-Disposition: attachment; filename=\"" . basename($archivo_partitura) . "\"\r\n";
            $multipart_message .= "Content-Transfer-Encoding: base64\r\n\r\n";
            $multipart_message .= chunk_split(base64_encode($file_content)) . "\r\n";

            // Línea divisoria final
            $multipart_message .= "--$boundary--\r\n";

            // Envía el correo electrónico
            $envio_exitoso = mail($to, $subject, $multipart_message, $headers);

            if ($envio_exitoso) {
                $_SESSION['mensaje'] = "Solicitud procesada y correo enviado correctamente.";
            } else {
                $_SESSION['mensaje'] = "Error al enviar el correo electrónico.";
            }
        } else {
            $_SESSION['mensaje'] = "El archivo no existe: $archivo_partitura";
        }
    } else {
        $_SESSION['mensaje'] = "Error al obtener la información de la partitura: " . mysqli_error($conex);
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conex);

    // Redirige de vuelta al panel de administración después de procesar la solicitud
    header("Location: ../php/panel_admin.php");
    exit();
} else {
    // Si no se ha enviado el formulario, redirige al panel de administración
    header("Location: ../php/panel_admin.php");
    exit();
}
?>
