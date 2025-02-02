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
 
    public function deleteCard($card_type_id) {
        $query = "DELETE FROM card_type WHERE card_type_id = :card_type_id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':card_type_id', $card_type_id, PDO::PARAM_INT);
    
        return $stmt->execute();
    }

    public function getCardDetails($card_type_id){
        $stmt = $this->db->prepare("SELECT * FROM card_type WHERE card_type_id = :card_type_id");
        $stmt->execute([':card_type_id' => $card_type_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updateCard($data){
        $stmt = $this->db->prepare("UPDATE card_type SET type_name = :type_name, card_category = :card_category,
        image_url = :image_url, description = :description, card_name = :card_name WHERE card_type_id = :card_type_id");

        return $stmt->execute([
            ':type_name' => $data['type_name'],
            ':card_category' => $data['card_category'],
            ':image_url' => $data['image_url'],
            ':description' => $data['description'],
            ':card_name' => $data['card_name'],
            ':card_type_id' => $data['card_type_id']
        ]);
    }
}
?>
