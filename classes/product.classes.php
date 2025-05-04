<?php

include "dbh.classes.php";

class Product extends Dbh {
    public function getAllProducts() {
        $stmt = $this->connect()->prepare("SELECT * FROM products");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addProduct($name, $price, $image) {
        $stmt = $this->connect()->prepare("INSERT INTO products (name, price, image) VALUES (?, ?, ?)");
        $stmt->execute([$name, $price, $image]);
    }

    public function deleteProduct($id) {
        $stmt = $this->connect()->prepare("DELETE FROM products WHERE id = ?");
        $stmt->execute([$id]);
    }

    public function getProduct($id) {
        $stmt = $this->connect()->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateProduct($id, $name, $price, $image) {
        $stmt = $this->connect()->prepare("UPDATE products SET name = ?, price = ?, image = ? WHERE id = ?");
        $stmt->execute([$name, $price, $image, $id]);
    }
}
