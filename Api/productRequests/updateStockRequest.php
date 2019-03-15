<?php
include_once("../../Classes/productClass.php");

    
if($_SERVER['REQUEST_METHOD'] == "POST"){    

    $getAllProductHandler = new Product();
    $getProductsResult = $getAllProductHandler->getProductInStock();
    echo json_encode($getProductsResult);
    
}else {
    echo json_encode("Post inte satt ${$_SERVER['REQUEST_METHOD']}");
}
?>

