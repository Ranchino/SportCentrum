<?php
include_once("./dbcHandler.php");
class Product {
    function __construct(){
        $this->database = new DatabaseController();
    }
    public function getAllProducts() {
        $query = $this->database->connection->prepare("SELECT * FROM products;");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);

        if (empty($result)) {
            return "Det gick inte att hämta password eller mail!";
        }
        return $result;
    }
}

?>