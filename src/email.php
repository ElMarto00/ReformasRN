<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $idea = $_POST['idea'];
    $fecha = $_POST['fecha'];
    $horaInicio1 = $_POST['horaInicio1'];
    $horaFin1 = $_POST['horaFin1'];

    $to = "presupuestosreformasrn@hotmail.com"; 
    $subject = "Nuevo mensaje del formulario de contacto";
    $body = "Nombre completo: $nombre\nCorreo Electrónico: $correo\nNúmero de Teléfono: $telefono\nDirección: $direccion\nIdea de reforma: $idea\nFecha de cita: $fecha\nHora de inicio: $horaInicio1\nHora de fin: $horaFin1";

    $headers = "From: PosibleProyecto@ReformasRN.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Correo enviado con éxito.";
    } else {
        echo "Error al enviar el correo.";
    }
}
?>
