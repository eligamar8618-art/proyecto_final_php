<?php
require_once "db.php";

class User {
    private $pdo;

    public function __construct() {
        $db = new Database();
        $this->pdo = $db->pdo;
    }

    // 🔹 Crear usuario
    public function create($nombre, $correo, $telefono, $perfil) {
        $sql = "INSERT INTO usuarios (nombre, correo, telefono, perfil) VALUES (?, ?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nombre, $correo, $telefono, $perfil]);
    }

    // 🔹 Listar todos los usuarios
    public function read() {
        $sql = "SELECT * FROM usuarios";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }

    // 🔹 Buscar usuario por id
    public function find($id) {
        $sql = "SELECT * FROM usuarios WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }

    // 🔹 Actualizar usuario
    public function update($id, $nombre, $correo, $telefono, $perfil) {
        $sql = "UPDATE usuarios SET nombre=?, correo=?, telefono=?, perfil=? WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$nombre, $correo, $telefono, $perfil, $id]);
    }

    // 🔹 Eliminar usuario
    public function delete($id) {
        $sql = "DELETE FROM usuarios WHERE id=?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$id]);
    }
}
?>

