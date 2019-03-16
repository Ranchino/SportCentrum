<?php
session_start();
include_once("../Classes/shippingClass.php");
include_once("../Classes/orderClass.php");
$method = $_SERVER['REQUEST_METHOD'];
if(isset($method) && $method == "POST") {
    if(isset($_SESSION['userInfo'])){
        if(isset($_SESSION['choosen'])) {
            if(!empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['address']) && !empty($_POST['postalcode'] && !empty($_POST['city']) && !empty($_POST['email'] && !empty($_POST['shipPhoneNO'])))){
                 $orderInsert = new Order();
                //Here we check the compnayname and based on that we get the id
                $compnayName = $_POST['choiceCompany'];
                $shipper = new Shipper();
                $shipperIDS = $shipper->getShipperID();
                foreach($shipperIDS as $shipper) {
                    if($shipper->CompanyName == $compnayName){
                        $shipperID = $shipper->ShipperID; 
                    }
                }
                for($i = 0; $i<count($_SESSION['userInfo']); $i++) {
                    $userIDD = $_SESSION['userInfo'][1];
        
                }
                $userID = json_decode($userIDD);
                $theShipperID = json_decode($shipperID);
                $shipFirstName = $_POST['firstname'];
                $ShipLastName = $_POST['lastname'];
                $ShipAdress = $_POST['address'];
        
                $shipPostalCode = json_decode($_POST['postalcode']);
                $shipCity = $_POST['city'];
                $shipMail = $_POST['email'];
                $shipPhoneNo = $_POST['shipPhoneNO'];
                $totalPrice = json_decode($_POST['totalPrice']);
        
                $orderDate = $_POST['orderingdate'];
                
                $checkResultOrder = $orderInsert->insertNewOrder($theShipperID, $shipFirstName, $ShipLastName, $ShipAdress, $shipPostalCode, $shipCity, $shipMail, 
                $shipPhoneNo, $totalPrice, $orderDate, $userID);
              
                //if($checkResultOrder)
                if($checkResultOrder) {
                    unset($_SESSION['choosen']);
                    echo json_encode($checkResultOrder);
                } else {
                    echo json_encode($checkResultOrder);
                }

            } else {
                echo json_encode("You did not fill all info");
            }

        }else{
            echo json_encode("We could not find your products");
        }
        
    } else {
        echo json_encode("You did not sign in");
    }

} else {
    echo json_encode("This is not post");
} 
?>