<?php

require_once 'config.php';
class FetchPikat {
    private $db;

    public function __construct(Database $database) {
        $this->db = $database->getConnection();
    }

    public function getPikat() {
        $sql = "SELECT * FROM pikat";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $pikat = $stmt ->fetchAll(PDO::FETCH_ASSOC);

        return $pikat;
    }
}

$database = new Database();
$fetchPikat = new FetchPikat($database);

header('Content-Type: application/json');
echo json_encode($fetchPikat->getPikat());

?>