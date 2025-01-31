<?php 

class CardMaker{
    private $db;

    public function __construct(Database $database){
        $this->db=$database->getConnection();
    }

    public function makeCard($data){
        $email = $data['email'];
        $type = $data['cardType'];

        $emailSql = "SELECT user_id FROM users WHERE email = :email";
        $stmt = $this->db->prepare($emailSql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        $user_id = $user['user_id'];

        

        $cardSql = "SELECT card_type_id FROM card_type WHERE type_name = :type_name";
        $stmt = $this->db->prepare($cardSql);
        $stmt->bindParam(':type_name', $type);
        $stmt->execute();
        $card = $stmt->fetch(PDO::FETCH_ASSOC);
        $card_type_id = $card['card_type_id'];
        
        $cardNumber = implode('', array_map(fn() => random_int(0, 9), range(1, 16)));
        
        $month = str_pad(random_int(1,12),2,'0',STR_PAD_LEFT);
        $year = date('y') + random_int(2,5);
        $expiryDate = "$year-$month-01";

        $cvv=random_int(100,999);

        $balance = 0.0;

        // $creditLimit = ; add logic for determening credit limit for credit cards

        $typeSql = "INSERT INTO cards (user_id, card_type_id, card_number, expiry_date, cvv, balance) 
                VALUES (:user_id, :card_type_id, :card_number, :expiry_date, :cvv, :balance) ";

        $stmt = $this->db->prepare($typeSql);
        $stmt->bindParam('user_id',$user_id);
        $stmt->bindParam('card_type_id',$card_type_id);
        $stmt->bindParam('card_number',$cardNumber);
        $stmt->bindParam('expiry_date',$expiryDate);
        $stmt->bindParam('cvv',$cvv);
        $stmt->bindParam('balance',$balance);
        $stmt->execute();
    }

}
?>