<?php
require_once 'models/User.php';

class AuthController {
    public function login($correo, $clave) {
        $user = User::findByEmail($correo);
        if ($user && password_verify($clave, $user['clave'])) {
            $_SESSION['usuario'] = $user;
            header("Location: /views/user/profile.php");
            exit;
        } else {
            echo "Credenciales incorrectas";
        }
    }

    public function register($data) {
        $data['clave'] = password_hash($data['clave'], PASSWORD_DEFAULT);
        User::save($data);
        header("Location: /views/auth/login.php");
    }

    public function logout() {
        session_destroy();
        header("Location: /");
    }
}
