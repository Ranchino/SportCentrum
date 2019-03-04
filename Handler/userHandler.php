<?php
include_once("./dbcHandler.php");
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
}
/*     public function insertNewUser($password, $mail, $nyhetsbrev){
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
    } */

    /* elseif(isset($_POST['passwordRegister']) && isset($_POST['mail']) && isset($_POST['nyhetsbrev'])) {
        $password = $_POST['passwordRegister'];
        $mail = $_POST['mail'];
        if($_POST['nyhetsbrev'] == "ja") {
            $nyhetsbrev = 1;
        }else {
            $nyhetsbrev = 0;
        }
        $userInfo = $user->insertNewUser($password, $mail, $nyhetsbrev);
        echo json_encode($userInfo);

    //Here we check if there is no value in input for first form
    } */
?>