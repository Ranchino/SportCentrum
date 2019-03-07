<?php
include_once("../Classes/dbcClass.php");
class Product {
    function __construct(){
        $this->database = new DatabaseController();
    }
    public function getAllProducts($categoryID) {
        $query = $this->database->connection->prepare("SELECT 
        productName, unitInStock, unitPrice, quantityPerUnit,
         pictureUrl, pictureUrl  FROM products WHERE categoryID=$categoryID;" );
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);

        if (empty($result)) {
            return "Det gick inte att hämta product";
        }
        return $result;
    }
}

/* SELECT ProductName, UnitInStock, UnitPrice, QuantityPerUnit,
         PictureUrl, PictureUrl,categoryName
        FROM products JOIN categories ON products.categoryID = categories.categoryID; */
?>