<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Proyecto Final</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Barra de navegación -->
    <nav class="navbar">
        <h2>Mi Proyecto Web</h2>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="listar.php">Usuarios</a></li>
            <li><a href="registro.php">Registro</a></li>
            <li><a href="contacto.php" class="active">Contacto</a></li>
        </ul>
    </nav>

    <!-- Sección principal -->
    <section class="contact-section">
        <h1>Contáctanos</h1>
        <p>Si deseas más información o tienes dudas sobre el sistema, completa el siguiente formulario.</p>

        <form class="contact-form" action="enviar_contacto.php" method="POST">
            <label for="nombre">Nombre completo:</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required>

            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" placeholder="Tu correo" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje aquí..." required></textarea>

            <button type="submit">Enviar mensaje</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>© 2025 - Proyecto Final | Desarrollado por Johan Esteban</p>
    </footer>

</body>
</html>
