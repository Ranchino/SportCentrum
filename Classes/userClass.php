<?php
include_once("../Classes/dbcClass.php");
class User {
    function __construct(){
        $this->database = new DatabaseController();
    }
    public function logInUser(){
        $query = $this->database->connection->prepare("SELECT password, mail, firstName, userID FROM user;");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        if (empty($result)) {
            return "Det gick inte att hämta password eller mail!";
        }

        return $result;
       
    }
    public function insertNewUser($hash, $mail, $nyhetsbrev, $firstName, $lastName, $adress, $country, $city, $phone){
        $query = $this->database->connection->prepare
        ("INSERT INTO user (password, mail,nyhetsBrev, FirstName, LastName, Adress, Country, City, PhoneNo) 
        VALUES(:password,:mail,:nyhetsBrev,:firstname,:lastname,:adress,:country,:city,:phoneNo);");
        $result = $query->execute(array(
            ":password"=>$hash,
            ":mail"=>$mail,
            ":nyhetsBrev"=>$nyhetsbrev,
            ":firstname"=>$firstName,
            ":lastname"=>$lastName,
            ":adress"=>$adress,
            ":country"=>$country,
            ":city"=>$city,
            ":phoneNo"=>$phone

        ));
        if (empty($result)) {
            return "Det gick inte att lägga till new user";
        }
        return $result;

    }

}

?>