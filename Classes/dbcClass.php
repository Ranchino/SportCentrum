<?php
class DatabaseController {
    function __construct(){
        //Localhost
        $dns = 'mysql:host=localhost;dbname=sportcentrum;charset=utf8';
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