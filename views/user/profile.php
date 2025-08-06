<?php include __DIR__ . '/../layout/navbar.php'; ?>
<h2>Perfil de Usuario</h2>
<?php
if (!isset($_SESSION['usuario'])) {
    echo "No has iniciado sesión.";
} else {
    echo "Bienvenido, " . $_SESSION['usuario']['nombre'];
}
?>