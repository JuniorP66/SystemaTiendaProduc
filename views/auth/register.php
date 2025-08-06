<?php include __DIR__ . '/../layout/navbar.php'; ?>
<h2>Registro</h2>
<form method="POST" action="/register">
    <input type="text" name="nombre" placeholder="Nombre">
    <input type="email" name="correo" placeholder="Correo">
    <input type="password" name="clave" placeholder="Contraseña">
    <button type="submit">Registrarse</button>
</form>
