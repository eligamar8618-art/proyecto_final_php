<?php
require_once "../src/User.php";
$user = new User();
$usuarios = $user->read();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados</title>
    <style>
        body {
            font-family: Arial;
            background: #f9f9f9;
            padding: 30px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        a {
            text-decoration: none;
            color: white;
            background: #28a745;
            padding: 5px 10px;
            border-radius: 5px;
        }
        a.eliminar {
            background: #dc3545;
        }
        a.editar {
            background: #ffc107;
            color: black;
        }
        .volver {
            display: block;
            width: fit-content;
            margin: 20px auto;
            background: #007bff;
            color: white;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <h2>Usuarios Registrados</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Perfil</th>
            <th>Acciones</th>
        </tr>

        <?php foreach ($usuarios as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= $u['nombre'] ?></td>
            <td><?= $u['correo'] ?></td>
            <td><?= $u['telefono'] ?></td>
            <td><?= $u['perfil'] ?></td>
            <td>
                <a class="editar" href="editar.php?id=<?= $u['id'] ?>">Editar</a>
                <a class="eliminar" href="eliminar.php?id=<?= $u['id'] ?>" onclick="return confirm('¿Seguro que deseas eliminar este usuario?');">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <a class="volver" href="index.php">⬅ Volver al registro</a>
</body>
</html>
