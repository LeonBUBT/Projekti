<?php
require_once 'config.php';

class ApplyHandler {
    private $db;

    public function __construct(Database $database) {
        $this->db = $database->getConnection();
    }

    public function insertUser($data) {
        $sql = "INSERT INTO users (name, email, phone, card_type, password, birthday, gender) 
        VALUES (:name, :email, :phone, :card_type, :password, :birthday, :gender)";
        
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':card_type', $data['type']);
        $stmt->bindParam(':password', password_hash($data['password'], PASSWORD_DEFAULT));
        $stmt->bindParam(':birthday', $data['bday']);
        $stmt->bindParam(':gender', $data['gender']);
        $stmt->execute();
    }
}
?>
