<?php 
class Milestones{
    private $db;

    public function __construct(Database $database){
        $this->db=$database->getConnection();
    }

    public function getMilestones(){
        try{
            $sql = "SELECT * FROM milestones";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>