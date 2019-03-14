<?php
include_once("../../Classes/dbcClass.php");
class Product {
    function __construct(){
        $this->database = new DatabaseController();
    }

        public function getAllProducts($catergoryChoosen) {
            
            try{

                $query = $this->database->connection->prepare
                (" SELECT productName, unitInStock, unitPrice, quantityPerUnit, pictureUrl, categoryName  FROM products 
                INNER JOIN categories ON products.categoryID=categories.categoryID WHERE categories.categoryName='$catergoryChoosen';");
                $query->execute();
                $query->setFetchMode(PDO::FETCH_OBJ);
                $result = $query->fetchAll();
                if (empty($result)) {
                    return "Det gick inte att hämta product";
                }
                return $result;
        
            }catch(Exception $e) {
                echo $e->getMessage();
        
            }
        }
        public function getAll() {
            
            try{

                $query = $this->database->connection->prepare
                (" SELECT productName, unitInStock, unitPrice, quantityPerUnit, pictureUrl, categoryName  FROM products 
                INNER JOIN categories ON products.categoryID=categories.categoryID;");
                $query->execute();
                $query->setFetchMode(PDO::FETCH_OBJ);
                $result = $query->fetchAll();
                if (empty($result)) {
                    return "Det gick inte att hämta alla product";
                }
                return $result;

            }catch(Exception $e) {
                echo $e->getMessage();
        
            }
        }
        public function insertNewproducts($categoryID, $productName, $unitInStock, $unitPrice, $quentityPerUnit, $imageUrl){
            try{
                $query = $this->database->connection->prepare
                ("INSERT INTO products (ProductName, categoryID, UnitInStock, UnitPrice, QuantityPerUnit, PictureUrl) VALUES (:ProductName, :categoryID, :UnitInStock,:UnitPrice, :QuantityPerUnit, :PictureUrl)");
                    $data = array(
                        ':ProductName' => $productName, 
                        ':categoryID' => $categoryID,
                        ':UnitInStock' => $unitInStock, 
                        ':UnitPrice' => $unitPrice, 
                        ':QuantityPerUnit' => $quentityPerUnit, 
                        ':PictureUrl' => $imageUrl);
                    
                    $result = $query->execute($data);
                    if(empty($result)){
                        return "Det gick inte att inserta";
                    }

                    return $result;
    

            }catch(Exception $e) {
                echo $e->getMessage();

            }
            
        }


}
?>