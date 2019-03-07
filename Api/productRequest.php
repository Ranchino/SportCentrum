<?php
include_once("../Classes/productClass.php");
$method = isset($_SERVER['REQUEST_METHOD']);
if($method){
    if($method == 'POST') {
        
        $product = new Product();
        if(isset($_POST['linkSite'])) {
            if($_POST['linkSite'] == "women"){
                $categoryID = 2;
                $products = $product->getAllProducts($categoryID );
                echo json_encode($products);
            }
            if($_POST['linkSite'] == "men"){
                $categoryID= 3;
                $products = $product->getAllProducts($categoryID);
                echo json_encode($products);
            }
            if($_POST['linkSite'] == "children"){
                $categoryID = 4;
                $products = $product->getAllProducts($categoryID);
                echo json_encode($products);
            }
            if($_POST['linkSite'] == "accessories"){
                $categoryID = 5;
                $products = $product->getAllProducts($categoryID);
                echo json_encode($products);
            }

        } else {
            echo json_encode("Den hittar inte np");
        }
    }
}

?>