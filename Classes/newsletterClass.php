<?php
    include_once("dbcClass.php");
    class Newsletter{
        function __construct()
        {
            $this->database = new DatabaseController();
        }
        public function getAllNewsletters(){
            $query = $this->database->connection->prepare("SELECT * FROM newletters UNION
            SELECT FirstName, LastName, Mail, PhoneNO 
            FROM customers
            LEFT JOIN user ON customers.UserID = user.UserID
            WHERE user.Nyhetsbrev = 1;");
            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_OBJ);
            if (empty($result)) {
                return "Det gick inte att hämta newsletters!";
            }
            return $result;
        }
        
        public function sendNewsLetter($firstName, $lastName, $mail, $phone){
            $query = $this->database->connection->prepare("INSERT INTO newletters (FirstName, LastName, Mail, PhoneNO) VALUES (:firstName,:lastName,:mail,:phoneNo);");
            $result = $query->execute(array(
                ":firstName" => $firstName,
                ":lastName" => $lastName,
                ":mail" => $mail,
                ":phoneNo" => $phone
            ));
            if(empty($result)) {
                return "Tyvärr försök igen, fyll i alla väderna";
            }
            return $result;
            
        }
    }


?>