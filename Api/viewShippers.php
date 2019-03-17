<?php
include_once("../Classes/shippingClass.php");
if($_SERVER['REQUEST_METHOD'] == "GET"){
    try {
        $shipper = new Shipper();
        $shipperList = $shipper->getShippersLists();
        echo json_encode($shipperList);
    }
    catch(PDOException $error) {
        echo json_encode($error->getMessage());
    }
}else {
    echo json_encode("Post inte satt ${$_SERVER['REQUEST_METHOD']}");
}



?>


