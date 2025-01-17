<?php 

class Reviews{
    private $db;

    public function __construct(Database $database){
        $this->db=$database->getConnection();
    }

    public function getReviews(){
        try{
            $sql = "SELECT * FROM reviews";
            $reviews =$this->db->prepare($sql);
            $reviews->execute();
            return $reviews->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>