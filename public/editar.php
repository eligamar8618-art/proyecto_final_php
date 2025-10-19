<?php
require_once "../src/User.php";
$user = new User();

// Obtener el ID del usuario desde la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $usuario = $user->find($id);

    if (!$usuario) {
        die("Usuario no encontrado 😕");
    }
} else {
    die("ID no especificado 😕");
}

// Si se envió el formulario de actualización
if (isset($_POST['actualizar'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $perfil = $_POST['perfil'];

    if ($user->update($id, $nombre, $correo, $telefono, $perfil)) {
        echo "<script>alert('✅ Usuario actualizado correctamente'); window.location='listar.php';</script>";
    } else {
        echo "<script>alert('❌ Error al actualizar usuario');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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
            background-color: #28a745;
            color: white;
            cursor: pointer;
            border: none;
        }
        input[type="submit"]:hover {
            background-color: #218838;
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
    <h2>Editar Usuario</h2>
    <form method="POST">
        <label>Nombre:</label>
        <input type="text" name="nombre" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>

        <label>Correo:</label>
        <input type="email" name="correo" value="<?= htmlspecialchars($usuario['correo']) ?>" required>

        <label>Teléfono:</label>
        <input type="text" name="telefono" value="<?= htmlspecialchars($usuario['telefono']) ?>" required>

        <label>Perfil:</label>
        <textarea name="perfil"><?= htmlspecialchars($usuario['perfil']) ?></textarea>

        <input type="submit" name="actualizar" value="Actualizar">
    </form>

    <a href="listar.php">⬅ Volver a la lista</a>
</body>
</html>
