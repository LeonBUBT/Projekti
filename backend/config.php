<?php  
class Database {
    private $server = 'localhost';
    private $dbname = 'nexusbank';
    private $username = 'root';
    private $password = '';
    private $connection;

    public function __construct(){
      try {
        $this->connection=new PDO("mysql:host={$this->server};dbname={$this->dbname}",$this->username,$this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOException $e) {
        echo "something went wront".$e->getMessage();
        exit;
      }
    }

    public function getConnection() {
        return $this->connection; 
    }
}
?>
