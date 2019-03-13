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
                        echo json_encode($_SESSION['choosen']);
                        exit;
                    } 
                }
                //Here we check if the product is not in the session
                if(!$isProductInSession){
                    array_push($_SESSION['choosen'], $addedProduct);
                    echo json_encode('Now we added a new product');
                    exit;
                }


            } else {

                $_SESSION['choosen'] = array();
                $product = json_decode($_POST['choosenProduct']);
                array_push($_SESSION['choosen'], $product);
                echo json_encode('Nu har vi den i session');
            }





        }else {
            echo json_encode("We do not find choosenProducts value!");
        }
    }else {
        echo json_encode("We do not find method post!");
    }

}
/* 
/*             $choosenProducts = json_decode($_POST['choosenProducts']);        
            if(isset($_SESSION['choosen'])) {
  
                echo json_encode($_SESSION['choosen']);

                echo json_encode($_SESSION['choosen']);
        } else {
                $_SESSION['choosen'] = array();

                array_push($_SESSION['choosen'], $value);
                echo json_encode($_SESSION['choosen']);
            } */ 

/* 
//$var = in_array($value, $_SESSION['choosen']);

foreach ($_SESSION['choosen'] as $keyTwo=>$valueTwo) {
    array_push($_SESSION['choosen'], $value);
/*                         if($value->productName == $valueTwo->productName && $value->numberChoosen > $valueTwo->numberChoosen) {
        
        $_SESSION['choosen'][$key] = $value;
        echo json_encode($_SESSION['choosen']);
        return;

    }else{
        array_push($_SESSION['choosen'], $value);
        echo json_encode($_SESSION['choosen']);
        return;

    } */

?>