<?php 
class CardType {
    private $db;

    public function __construct(Database $database){
        $this->db=$database->getConnection();
    }

    public function getAllCardTypes(){
        try {
            $sql="SELECT * FROM card_type";
            $cards=$this->db->prepare($sql);
            $cards->execute();
            return $cards->fetchAll(PDO::FETCH_ASSOC);            
        } catch (PDOException $e) {
            echo "failed".$e->getMessage();
        }
    }
}
    
?>
