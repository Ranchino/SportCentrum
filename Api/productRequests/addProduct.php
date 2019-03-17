<?php
session_start();
include_once("../../Classes/productClass.php");
$method = isset($_SERVER['REQUEST_METHOD']);

if($method) {
    if($method == "POST"){
        if(isset($_POST['choosenProduct'])) {

            $isProductInSession = false;
            if(isset($_SESSION['choosen'])) {
                $addedProduct = json_decode($_POST['choosenProduct']);
                foreach($_SESSION['choosen'] as $savedProduct) {
                    //Here we add the new product
                    if($savedProduct->productName == $addedProduct->productName) {
                        $isProductInSession = true;
                        $savedProduct->numberChoosen++;
                        echo json_encode('Now we increment the amount of this product');
                        exit;
                    } 
                }
                //Here we check if the product is not in the session
                if(!$isProductInSession){
                    array_push($_SESSION['choosen'], $addedProduct);
                    echo json_encode('Now we added new product to shoppingcart');
                    exit;
                }


            } else {

                $_SESSION['choosen'] = array();
                $product = json_decode($_POST['choosenProduct']);
                array_push($_SESSION['choosen'], $product);
                echo json_encode('Now we added for first to shoppingcart');
            }





        }else {
            echo json_encode("We do not find choosenProducts value!");
        }
    }else {
        echo json_encode("We do not find method post!");
    }

}
?>