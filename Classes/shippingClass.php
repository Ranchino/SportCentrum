<?php

include_once("../Classes/dbcClass.php");

class Shipping  {
    function __construct()
    {
        $this->database = new DatabaseController();
    }
    public function ShippersList()
    {
      $query =  $this->database->connection->prepare("SELECT CompanyName, SippingPrice, ShippingMethod");
      $query->execute();
      $result = $query->fetchAll(PDO::FETCH_OBJ);

        if (empty($result)) {
            return "Det gick inte att hämta leverantörer";
        }
        return $result;
    }
}

?>