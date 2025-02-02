<?php
session_start();

class User {
    private $db;

    public function __construct(Database $database) {
        $this->db = $database->getConnection();
    }

    public function login($email, $password) {
        $query = "SELECT * FROM users WHERE email = :email";
        $stmt = $this->db->prepare($query);
        $stmt->execute(['email' => $email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['role']=$user['admin'];
            return true;
        }
        return false;
    }

    public function getUsers(){
        try{
            $sql = "SELECT * FROM users";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function deleteUser($user_id) {
        $query = "DELETE FROM users WHERE user_id = :user_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
    
        return $stmt->execute();
    }

    public function isLoggedIn() {
        return isset($_SESSION['user_id']);
    }

    public function logout() {
        session_destroy();
        header("Location: ../login.php");
        exit;
    }
}
?>
