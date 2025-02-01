<?php 

class WCU{
    private $db;

    public function __construct(Database $database){
        $this->db=$database->getConnection();
    }

    public function getWCU(){
        try{
            $sql = "SELECT * FROM why_chose_us";
            $stmt = $this->db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);     
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}

?>