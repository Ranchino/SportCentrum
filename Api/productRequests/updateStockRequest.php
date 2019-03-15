<?php
include_once("../../Classes/productClass.php");

    
if($_SERVER['REQUEST_METHOD'] == "POST"){    

    $getAllProductHandler = new Product();
    $getProductsResult = $getAllProductHandler->getProductInStock();
    echo json_encode($getProductsResult);

    if($_POST['collectionType'] == "products"){
        $setProductsHandler = new Product();
        if($_POST['action'] == "update"){
                        
            $productUpdateResult = $setProductsHandler->updateStock($_POST['productID'], $_POST['quantity']);
            echo json_encode($productUpdateResult);
        }
    }
}else {
    echo json_encode("Post inte satt ${$_SERVER['REQUEST_METHOD']}");
}
?>

