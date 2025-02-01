<?php 
class Loans{
    private $db;

    public function __construct(Database $database){
        $this->db=$database->getConnection();
    }

    public function getLoans(){
        try{
            $sql = "SELECT * FROM loan_types";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }

    }
}
?>