<?php
session_start();
include_once("../../Classes/productClass.php");
$method = isset($_SERVER['REQUEST_METHOD']);

if($method) {
    if($method == "POST"){
        if(isset($_POST['choosenProducts'])) {
            $choosenProducts = json_decode($_POST['choosenProducts']);        
            foreach($choosenProducts as $key=>$value) {
                $_SESSION['choosen'][$key]=$value;
            }

            
            echo json_encode("Now we have all products here into session");
        }else {
            echo json_encode("We do not find choosenProducts value");
        }
    }else {
        echo json_encode("We do not find method post");
    }

}

?>