<?php
include_once("../../Classes/productClass.php");
$method = isset($_SERVER['REQUEST_METHOD']);
if($method){
    if($method == 'GET') {
        
        
        $product = new Product();
        
        if(isset($_GET['categoryName'])) {
            try{       
                $catergoryChoosen = $_GET['categoryName'];
                if($catergoryChoosen == "women" || $catergoryChoosen == "men" || $catergoryChoosen == "children" || $catergoryChoosen == "accessories"){

                    $products = $product->getAllProducts($catergoryChoosen);
                    echo json_encode($products);
                }else {
                    $allProducts = $product->getAll();
                    echo json_encode($allProducts);
                }

        
            }catch(Exception $e) {
                echo $e->getMessage();
        
            }

        } else {
            echo json_encode("Den hittar inte get value");
        }
    }
}

?>