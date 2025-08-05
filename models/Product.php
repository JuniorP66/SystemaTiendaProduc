<?php

class Product {
    private static $file = __DIR__ . '/../data/products.json';

    public static function all() {
        return json_decode(file_get_contents(self::$file), true);
    }

    public static function find($id) {
        $products = self::all();
        foreach ($products as $product) {
            if ($product['id'] == $id) return $product;
        }
        return null;
    }
}
