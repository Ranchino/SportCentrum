<?php
class DatabaseController {
    function __construct(){
        //Localhost
        $dns = 'mysql:host=localhost;dbname=sportcentrum;';
        $user = 'root';
        $password = '';
        try {
            $this->connection = new PDO($dns, $user, $password, null);
        } catch(PDOException $e) {
            throw $e;
        }    
    }
}

?>