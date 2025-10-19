<?php
require_once "../src/User.php";
$user = new User();

// Verificamos si nos pasaron el ID del usuario por la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Intentamos eliminar el usuario
    if ($user->delete($id)) {
        echo "<script>alert('🗑️ Usuario eliminado correctamente'); window.location='listar.php';</script>";
    } else {
        echo "<script>alert('❌ Error al eliminar usuario'); window.location='listar.php';</script>";
    }
} else {
    echo "<script>alert('⚠️ No se especificó un usuario para eliminar'); window.location='listar.php';</script>";
}
?>
