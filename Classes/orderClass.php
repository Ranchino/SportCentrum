<?php
    include_once("dbcClass.php");
    class Order{
        function __construct()
        {
            $this->database = new DatabaseController();
        }
        public function getAllOrders(){
            $query = $this->database->connection->prepare("SELECT * FROM orders;");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            if (empty($result)) {
                return "Det finns inga ordrar!";
            }
            return $result;
        }

        public function insertNewOrder($theShipperID, $shipFirstName, $ShipLastName, $ShipAdress, $shipPostalCode, $shipCity,$shipMail, $shipPhoneNo, $totalPrice, $orderDate, $userID){
            try{
                $query = $this->database->connection->prepare("INSERT INTO orders(
                    ShipperID, ShipFirstName,ShipLastName,ShippAdress,ShippPostelCode,ShipCity,ShipMail,ShipPhoneNO,TotalPrice, OrderDate,UserID) VALUES(:shipperId,:shipFirstName,:shipLastName,:shippAdress,:shippPostelCode,
                :shipCity,:shipMail,:shipPhoneNO,:totalPrice,:orderDate,:user);");
                $result = $query->execute(array(
                    ":shipperId"=>$theShipperID,
                    ":shipFirstName"=>$shipFirstName,
                    ":shipLastName"=>$ShipLastName,
                    ":shippAdress"=>$ShipAdress,
                    ":shippPostelCode"=>$shipPostalCode,
                    ":shipCity"=>$shipCity,
                    ":shipMail"=>$shipMail,
                    ":shipPhoneNO"=>$shipPhoneNo,
                    ":totalPrice"=>$totalPrice,
                    ":orderDate"=>$orderDate,
                    ":user"=>$userID
                ));
                if(empty($result)) {
                    return "We could not save your order please do not send empty info";
                }

                return $result;
            }catch(Exeption $e){
                echo $e->get_message();
            }


        }
    }
?>