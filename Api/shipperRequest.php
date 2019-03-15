<?php
include_once("../Classes/shippingClass.php");
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST') {
    if(isset($_POST["wantFractAlternative"]) && $_POST["wantFractAlternative"] == "fraktAlterNativ") {
        $ship = new Shipper();
        $gettingShippers = $ship->getShippersLists();

        echo json_encode($gettingShippers);
    } else {
        echo json_encode("Den hittar inte fraktaleterNativeValue");

    }
} else {
    echo json_encode("Det är inte post");
}

?>