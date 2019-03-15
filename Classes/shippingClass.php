<?php
include_once("../Classes/dbcClass.php");
class Shipper  {
    function __construct()
    {
        $this->database = new DatabaseController();
    }
    public function getShippersLists()
    {
      $query =  $this->database->connection->prepare("SELECT CompanyName, ShippingPrice, ShippingMethod FROM shippers");
      $query->execute();
      $result = $query->fetchAll(PDO::FETCH_OBJ);

        if (empty($result)) {
            return "Det gick inte att hämta leverantörer";
        }
        return $result;
    }
}

?>