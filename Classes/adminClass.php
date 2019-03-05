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
            return "Det gick inte att hämta password eller mail!";
        }
        return $result;
    }
}
?>