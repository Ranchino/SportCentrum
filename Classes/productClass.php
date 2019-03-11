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

}
/* SELECT productName, unitInStock, unitPrice, quantityPerUnit, pictureUrl, categoryName  FROM products 
                INNER JOIN categories ON products.categoryID=categories.categoryID */
/* SELECT p.ProductName, p.UnitInStock, p.UnitPrice, p.QuantityPerUnit, p.PictureUrl, c.CategoryName FROM products 
AS p JOIN `categories` AS c ON p.categoryID=c.categoryID WHERE c.categoryID=2 */
/* $product['productName'], 
                    $product['unitInStock'], $product['UnitPrice'], 
                    $product['quantityPerUnit'], $product['pictureUrl'], $product['categoryName'] */
/*SELECT p.productName, c.categoryName 
                FROM products AS p INNER JOIN categories AS c 
                ON p.categoryID=c.categoryID ORDER BY p.productName;  */
?>