<?php
require_once "../src/User.php";
$user = new User();

if (isset($_POST['registrar'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $perfil = $_POST['perfil'];

    if ($user->create($nombre, $correo, $telefono, $perfil)) {
        echo "<script>alert('✅ Usuario registrado correctamente');</script>";
    } else {
        echo "<script>alert('❌ Error al registrar usuario');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <style>
        body {
            font-family: Arial;
            background: #f5f5f5;
            margin: 0;
            padding: 40px;
        }
        h2 {
            text-align: center;
        }
        form {
            background: white;
            padding: 20px;
            border-radius: 10px;
            max-width: 400px;
            margin: 0 auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        a {
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <form action="" method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <label>Correo:</label>
        <input type="email" name="correo" required>

        <label>Teléfono:</label>
        <input type="text" name="telefono" required>

        <label>Perfil:</label>
        <textarea name="perfil"></textarea>

        <input type="submit" name="registrar" value="Registrar">
    </form>

    <a href="listar.php">📋 Ver usuarios registrados</a>
</body>
</html>
