<?php
include_once("../../Classes/productClass.php");

    
if($_SERVER['REQUEST_METHOD'] == "POST"){    
    if($_POST['action'] == "get"){
        
        $getAllProductHandler = new Product();
        $getProductsResult = $getAllProductHandler->getProductInStock();
        echo json_encode($getProductsResult);
    }

    if($_POST['action'] == "update"){
        
        $setProductsHandler = new Product();
                 
        $productUpdateResult = $setProductsHandler->updateProducts($_POST['productID'], $_POST['quantity']);
        echo json_encode($productUpdateResult);
    }
}else {
    echo json_encode("Post inte satt ${$_SERVER['REQUEST_METHOD']}");
}
?>

