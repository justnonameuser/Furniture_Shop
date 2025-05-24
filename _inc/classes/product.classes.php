<?php



class Product extends Dbh {
    public function getAllProducts() {
        try {
            $stmt = $this->connect()->prepare("SELECT * FROM products");
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Vyskytla chyba: " . $e->getMessage();
        }
    }

    public function addProduct($name, $price, $image) {
        if (empty($name) || !is_numeric($price) || empty($image)) {
            throw new Exception("Nesprávne údaje o produkte.");
        }
        try {
            $stmt = $this->connect()->prepare("INSERT INTO products (name, price, image) VALUES (?, ?, ?)");
            $stmt->execute([$name, $price, $image]);
        } catch (PDOException $e) {
            echo "Vyskytla chyba: " . $e->getMessage();
        }
        
    }

    public function deleteProduct($id) {
        try {
            $stmt = $this->connect()->prepare("DELETE FROM products WHERE id = ?");
            $stmt->execute([$id]);
        } catch (PDOException $e) {
            echo "Vyskytla chyba: " . $e->getMessage();
        }
        
    }

    public function getProduct($id) {
        try {
            $stmt = $this->connect()->prepare("SELECT * FROM products WHERE id = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return null;
        }
        
    }

    public function updateProduct($id, $name, $price, $image) {
        if (empty($name) || !is_numeric($price) || empty($image)) {
            throw new Exception("Nesprávne údaje o produkte.");
        }
        try {
            $stmt = $this->connect()->prepare("UPDATE products SET name = ?, price = ?, image = ? WHERE id = ?");
            $stmt->execute([$name, $price, $image, $id]);
        } catch (PDOException $e) {
            echo "Vyskytla chyba: " . $e->getMessage();
        }
        
    }
}
