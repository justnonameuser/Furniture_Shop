<?php
include_once "dbh.classes.php";
class Testimonial extends Dbh {

    public function getAllTestimonials() {
        $sql = "SELECT * FROM testimonials ORDER BY id DESC LIMIT 3";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
    public function addTestimonial($name, $role, $message, $imagePath) {
        $sql = "INSERT INTO testimonials (name, role, message, image_path)
                VALUES (:name, :role, :message, :image_path)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':role', $role);
        $stmt->bindParam(':message', $message);
        $stmt->bindParam(':image_path', $imagePath);
        $stmt->execute();
    }
}
