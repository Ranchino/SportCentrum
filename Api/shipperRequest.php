<?php
include_once("../Classes/shippingClass.php");
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'GET') {
    $ship = new Shipper();
    $gettingShippers = $ship->getShippersLists();

    echo json_encode($gettingShippers);
} else {
    echo json_encode("Det är inte post");
}

?>