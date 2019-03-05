<?php
include_once("../Classes/dbcClass.php");
class User {
    function __construct(){
        $this->database = new DatabaseController();
    }
    public function logInUser(){
        $query = $this->database->connection->prepare("SELECT password, mail FROM user;");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);
        if (empty($result)) {
            return "Det gick inte att hämta password eller mail!";
        }

        return $result;
       
    }
    public function insertNewUser($password, $mail, $nyhetsbrev){
        $query = $this->database->connection->prepare
        ("INSERT INTO user (password, mail,nyhetsBrev) VALUES(:password,:mail,:nyhetsBrev);");
        $result = $query->execute(array(
            ":password"=>$password,
            ":mail"=>$mail,
            ":nyhetsBrev"=>$nyhetsbrev
        ));
        if (empty($result)) {
            return "Det gick inte att lägga till new user";
        }
        return $result;

    }
}

?>