<?php
session_start();
include_once("../Classes/shippingClass.php");
$method = $_SERVER['REQUEST_METHOD'];
$shipper = new Shipper();
if(isset($method) && $method == "POST") {
    if(isset($_SESSION['userInfo'])){
        $shipperList = $shipper->getShippersLists();
        echo json_encode($shipperList);
        
    } else {
        echo json_encode(false);
    }

} else {
    echo json_encode("This is not post");
} 
?>