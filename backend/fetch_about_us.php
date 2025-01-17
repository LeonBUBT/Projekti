<?php 
class AboutUs{
    private $db;
    
    public function __construct(Database $database){
        $this->db=$database->getConnection();
    }

    public function getCards(){
        try{
            $sql = "SELECT * FROM about_us";
            $cards = $this->db->prepare($sql);
            $cards->execute();
            return $cards->fetchAll(PDO::FETCH_ASSOC);
        }catch(PDOException $e){
            echo $e;
        }
    }
}

?>