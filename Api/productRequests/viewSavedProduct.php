<?php
session_start();
$method = isset($_SERVER['REQUEST_METHOD']);
if($method){
    if($method == 'POST') {

        if(isset($_SESSION['choosen'])){
            echo json_encode($_SESSION['choosen']);
        } else {
        
            echo json_encode("There is not session saved");
        }

    }

}

?>