<?php
require_once 'config.php';

class ApplyHandler {
    private $db;

    public function __construct(Database $database) {
        $this->db = $database->getConnection();
    }

    public function insertUser($data) {

        $sql = "SELECT COUNT(*) FROM users WHERE email = :email";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':email',$data['email']);
        $stmt->execute();
        $count = $stmt->fetchColumn();

        if($count>0){
            die ("This email already exists");
        }

        $sql = "INSERT INTO users (name, email, phone, type, admin, password, birthday, gender, personal_number) 
        VALUES (:name, :email, :phone, :type, :admin, :password, :birthday, :gender, :personal_number)";
        $hashedPass = password_hash($data['password'], PASSWORD_DEFAULT);

        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':email', $data['email']);
        $stmt->bindParam(':phone', $data['phone']);
        $stmt->bindParam(':type', $data['accType']);
        $stmt->bindparam(':admin',$data['admin']);
        $stmt->bindParam(':password', $hashedPass);
        $stmt->bindParam(':birthday', $data['bday']);
        $stmt->bindParam(':gender', $data['gender']);
        $stmt->bindParam(':personal_number', $data['pNumber']);
        $stmt->execute();
    }
}
?>