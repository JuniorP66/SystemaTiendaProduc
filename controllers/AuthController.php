<?php
require_once __DIR__ . '/../models/User.php';

class AuthController {

    public function login($correo, $clave) {
        $usuario = User::findByEmail($correo);

        if ($usuario && password_verify($clave, $usuario['clave'])) {
            $_SESSION['usuario'] = $usuario;
            header('Location: /profile');
            exit;
        } else {
            echo "<p style='color:red;'>Correo o contraseña incorrectos.</p>";
            echo "<a href='/login'>Volver al login</a>";
        }
    }

    public function register($data) {
        if (User::findByEmail($data['correo'])) {
            echo "<p style='color:red;'>Este correo ya está registrado.</p>";
            echo "<a href='/register'>Volver al registro</a>";
            return;
        }

        $data['clave'] = password_hash($data['clave'], PASSWORD_DEFAULT);
        User::save($data);

        echo "<p style='color:green;'>Usuario registrado con éxito.</p>";
        echo "<a href='/login'>Iniciar sesión</a>";
    }
}