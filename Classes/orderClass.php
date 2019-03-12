<?php
    include_once("dbcClass.php");
    class Order{
        function __construct()
        {
            $this->database = new DatabaseController();
        }
        public function getAllOrders(){
            $query = $this->database->connection->prepare("SELECT * FROM orders;");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            if (empty($result)) {
                return "Det finns inga ordrar!";
            }
            return $result;
        }
    }
?>