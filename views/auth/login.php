<?php include __DIR__ . '/../layout/navbar.php'; ?>
<h2>Iniciar sesión</h2>
<form method="POST" action="/login">
    <input type="email" name="correo" placeholder="Correo">
    <input type="password" name="clave" placeholder="Contraseña">
    <button type="submit">Entrar</button>
</form>
