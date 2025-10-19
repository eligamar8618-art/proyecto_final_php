<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    // Simulación del envío (aquí podrías integrar PHPMailer si quieres hacerlo real)
    echo "<script>
        alert('Gracias $nombre, tu mensaje ha sido enviado correctamente.');
        window.location='contacto.php';
    </script>";
} else {
    header("Location: contacto.php");
    exit();
}
?>
