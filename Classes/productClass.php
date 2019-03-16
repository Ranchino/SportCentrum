<?php
include_once("../../Classes/dbcClass.php");
class Product {
    function __construct(){
        $this->database = new DatabaseController();
    }

        public function getAllOfThisCategory($catergoryChoosen) {
            
            try{

                $query = $this->database->connection->prepare
                (" SELECT productName, unitInStock, unitPrice, pictureUrl, categoryName, productID FROM products 
                INNER JOIN categories ON products.categoryID=categories.categoryID WHERE categories.categoryName='$catergoryChoosen';");
                $query->execute();
                $query->setFetchMode(PDO::FETCH_OBJ);
                $result = $query->fetchAll();
                if (empty($result)) {
                    return false;
                }
                return $result;
        
            }catch(Exception $e) {
                echo $e->getMessage();
        
            }
        }
        public function getAll() {
            
            try{

                $query = $this->database->connection->prepare
                (" SELECT productName, unitInStock, unitPrice, pictureUrl, categoryName, productID FROM products 
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
    

        public function getProductInStock(){
            try{
                $query = $this->database->connection->prepare("SELECT * FROM products;");
                $query->execute();
                $result = $query->fetchAll(PDO::FETCH_OBJ);
                if (empty($result)) {
                    return "Det finns inga producter!";
                }
                return $result;

            }catch(Exception $e){
                echo $e->getMessage();
            }
        }
        public function updateProducts($productID, $quantity){
            try{
                $query = $this->database->connection->prepare(" UPDATE products 
                SET UnitInStock ='" .$quantity. "'WHERE ProductID = '".$productID."';");
                
                $result = $query->execute();
                if (empty($result)) {
                    return "Det finns inget att uppdatera!";
                }
                return $result;

            }catch(Exception $e) {
                echo $e->getMessage();
            }
        }


}
?>