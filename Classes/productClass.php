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
        public function updateProductsInStock(){
            try{
                $query = $this->database->connection->prepare(" UPDATE products 
                SET unitInStock ='" .$amount. "'WHERE productId = '".$id."';");
                
                $result = $query->execute();
                if (empty($result)) {
                    return "Det finns inga ordrar!";
                }
                return $result;

            }catch(Exception $e) {
                echo $e->getMessage();
            }
        }

}

/* $query = $this->database->connection->prepare
                ("INSERT INTO products (ProductName, categoryID, UnitInStock, UnitPrice, QuantityPerUnit, PictureUrl) VALUES (:ProductName, :categoryID, :UnitInStock, :UnitPrice, :QuantityPerUnit, :PictureUrl)");

                for($count = 0; $count<count($_POST['hidden_product_name']); $count++){
                    $data = array(
                        ':ProductName' => $_POST['hidden_product_name'][$count], 
                        ':categoryID' => $_POST['hidden_category_id'][$count],
                        ':UnitInStock' => $_POST['hidden_unit_in_stock'][$count], 
                        ':UnitPrice' => $_POST['hidden_unit_price'][$count], 
                        ':QuantityPerUnit' => $_POST['hidden_quentity_per_unit'][$count], 
                        ':PictureUrl' => $_POST['hidden_image_url'][$count]);
                    $statement = $connect->prepare($query);
                    $statement->execute($data); */


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