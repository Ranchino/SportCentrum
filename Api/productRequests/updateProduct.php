<?php
header("Content-Type: application/json");
parse_str(file_get_contents('php://input'), $_PUT);
session_start();
$method = isset($_SERVER['REQUEST_METHOD']);
//Here we check the method
if(isset($method) && $method == 'put') {

    //Here we check the value from client
    if(isset($_PUT['wantToUpdate'])){

        //Here we check the in the session
        $TimToDeleteCompletley = false;
        if(isset($_SESSION['choosen'])) {
            $productWantToUpdate = json_decode($_PUT['wantToUpdate']);
            //$session = $_SESSION['choosen'];
            for($i = 0; $i<count($_SESSION['choosen']); $i++) {
                if($_SESSION['choosen'][$i]->productName == $productWantToUpdate->productName) {
                    //echo json_encode(gettype($session[$i]->numberChoosen));
                    if($_SESSION['choosen'][$i]->numberChoosen>=2) {
                        $_SESSION['choosen'][$i]->numberChoosen--;
                        echo json_encode(true);
                        exit;
                    } 
                    
                    if($_SESSION['choosen'][$i]->numberChoosen <=1){
                        //unset($theSession[$key]);
                        array_splice($_SESSION['choosen'], $i, 1);
                        echo json_encode(false);
                        
                    } 
    
                }

            }


        } else {
            echo json_encode('There is no session');
        }

    } else {
        echo json_encode('We do not fine the value of wantToUpdate');
    }
} else {
    echo json_encode('Now have not the update');
}
?>