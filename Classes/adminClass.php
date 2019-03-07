<?php
include_once("../Classes/dbcClass.php");
class Admin {
    function __construct(){
        $this->database = new DatabaseController();
    }
    public function logInAdmin(){
        $query = $this->database->connection->prepare("SELECT password, mail FROM admin;");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_OBJ);

        if (empty($result)) {
            return "Det gick inte";
        }
        return $result;
    }

    public function insertNewAdmin($hash, $mail){
        $query = $this->database->connection->prepare
        ("INSERT INTO admin (mail, password) VALUES(:mail,:password);");
        $result = $query->execute(array(
            ":mail"=>$mail,
            ":password"=>$hash,
        ));
        if (empty($result)) {
            return "Det gick inte att lägga till new admin";
        }
        return $result;

    }
}
?>