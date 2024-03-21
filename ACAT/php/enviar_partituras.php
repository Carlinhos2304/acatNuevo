<?php
session_start();

// Verifica si el usuario ha iniciado sesión como administrador
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
    header("Location: ../php/login.php");
    exit();
}

// Agrega esta línea para definir la ruta del directorio de partituras
$directorio_partituras = __DIR__ . "/partituras/";


// Verifica si se ha enviado el formulario y si hay partituras seleccionadas
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['partituras'])) {
    // Conecta a la base de datos (ajusta según tu configuración)
    $conex = mysqli_connect("localhost", "root", "", "cultural");

    if (!$conex) {
        die("La conexión a la base de datos falló: " . mysqli_connect_error());
    }

    // Obtiene las partituras seleccionadas
    $partituras_seleccionadas = $_POST['partituras'];

    // Lógica para enviar partituras seleccionadas
    foreach ($partituras_seleccionadas as $partitura_id) {
        // Obtén la información de la partitura
        $info_partitura_query = "SELECT nombre, email, partitura FROM partituras WHERE id = $partitura_id";
        $info_partitura_resultado = mysqli_query($conex, $info_partitura_query);

        if ($info_partitura_resultado && mysqli_num_rows($info_partitura_resultado) > 0) {
            $info_partitura = mysqli_fetch_assoc($info_partitura_resultado);

            $to = $info_partitura['email'];
            $subject = "Partitura Adjunta";

            // Construye la ruta completa al archivo
            $archivo_partitura = $directorio_partituras . $info_partitura['partitura'];
            
            // Verifica si el archivo existe antes de intentar abrirlo
            if (file_exists($archivo_partitura)) {
                // Adjunta el archivo al mensaje
                $random_hash = md5(date('r', time()));
                $attachment = chunk_split(base64_encode(file_get_contents($archivo_partitura)));

                $message = "Estimado/a {$info_partitura['nombre']},\n\n";
                $message .= "Adjunto encontrará la partitura solicitada.\n\n";
                $message .= "¡Gracias!\n";

                $message .= "--PHP-mixed-$random_hash\r\n";
                $message .= "Content-Type: application/pdf; name=\"" . basename($archivo_partitura) . "\"\r\n";
                $message .= "Content-Transfer-Encoding: base64\r\n";
                $message .= "Content-Disposition: attachment\r\n\r\n";
                $message .= $attachment . "\r\n\r\n";
                $message .= "--PHP-mixed-$random_hash--\r\n";

                // Headers para el correo
                $headers = "From: marcelosalamanca2003@gmail.com";
                $headers .= "\r\nMIME-Version: 1.0\r\n";
                $headers .= "Content-Type: multipart/mixed; boundary=\"PHP-mixed-$random_hash\"\r\n";
                $headers .= "\r\n";

                // Envía el correo electrónico
                $envio_exitoso = mail($to, $subject, $message, $headers);

                if ($envio_exitoso) {
                    $_SESSION['mensaje'] = "Partituras enviadas correctamente por correo electrónico.";
                } else {
                    $_SESSION['mensaje'] = "Error al enviar el correo electrónico.";
                }
            } else {
                $_SESSION['mensaje'] = "El archivo no existe: $archivo_partitura";
            }
        } else {
            $_SESSION['mensaje'] = "Error al obtener la información de la partitura: " . mysqli_error($conex);
        }
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conex);

    // Redirige de vuelta al panel de administración después de procesar las partituras
    header("Location: ../php/panel_admin.php");
    exit();
} else {
    // Si no se ha enviado el formulario o no se han seleccionado partituras, redirige al panel de administración
    header("Location: ../php/panel_admin.php");
    exit();
}
?>
