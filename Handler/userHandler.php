<?php
include_once("./dbcHandler.php");
class User {
    function __construct(){
        $this->database = new DatabaseController();
    }
    public function logInUser(){
        $query = $this->database->connection->prepare("SELECT password, mail FROM user;");
        $query->execute();
        $result = $query->fetchObject();

        if (empty($result)) {
            return "Det gick inte att hämta password eller mail!";
        }
        return $result;
    }
}
?>