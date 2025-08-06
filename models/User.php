<?php

class User {
    private static $file = __DIR__ . '/../data/users.json';

    public static function all() {
        return json_decode(file_get_contents(self::$file), true);
    }

    public static function findByEmail($correo) {
        $users = self::all();
        foreach ($users as $user) {
            if ($user['correo'] === $correo) return $user;
        }
        return null;
    }

    public static function save($data) {
        $users = self::all();
        $data['id'] = count($users) + 1;
        $users[] = $data;
        file_put_contents(self::$file, json_encode($users, JSON_PRETTY_PRINT));
        return true;
    }
}