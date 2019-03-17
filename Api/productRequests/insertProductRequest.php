<?php
include_once("../../Classes/productClass.php");

$method = $_SERVER['REQUEST_METHOD']; 
if($method == "POST"){
    $product = new Product();
    if(isset($_POST["hidden_category_id"])){
        $categoryID = json_decode($_POST["hidden_category_id"]);
        $productName = $_POST["hidden_product_name"];
        $unitInStock = json_decode($_POST["hidden_unit_in_stock"]);
        $unitPrice = json_decode($_POST["hidden_unit_price"]);
        $imageUrl = $_POST["hidden_image_url"];

        $insert = $product->insertNewproducts($categoryID, $productName, $unitInStock, $unitPrice, $imageUrl);

        echo json_encode($insert);

    }else{
        echo json_encode("Hittar inte kategori ID");
    }

}else{
    echo json_encode("Vi hittar inte Post");
}


?>