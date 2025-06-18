<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["nombre"])) {
    $nombre = trim($_POST["nombre"]);

    $sql = "INSERT INTO usuarios (nombre) VALUES (:nombre)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['nombre' => $nombre]);

    echo "Nombre guardado: $nombre";
} else {
    echo "Acceso no permitido.";
}
