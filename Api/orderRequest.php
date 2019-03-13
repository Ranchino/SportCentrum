<?php
    include_once("../Classes/orderClass.php");
    
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        try {
            $orderHandler = new Order();
            $orderResult = $orderHandler->getAllOrders();
            echo json_encode($orderResult);
        }
        catch(PDOException $error) {
            echo json_encode($error->getMessage());
        }
    }else {
        echo json_encode("Post inte satt ${$_SERVER['REQUEST_METHOD']}");
    }
?>