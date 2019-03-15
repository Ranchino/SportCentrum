<?php
session_start();
$method = $_SERVER['REQUEST_METHOD'];
 if($method == "POST") {
    //First we check the session 
    if(isset($_SESSION['userInfo'])){
       //Here when use sign in and the name apears on the screen plus sign out button
       if($_POST['action'] == "getSession"){

          echo json_encode($_SESSION['userInfo']);
       }


       //Here when the use want to sing out then we destroy the session
       if($_POST['action'] == "destroySession"){
         unset($_SESSION['userInfo']);
         echo json_encode(true);
       }



    }else {
       echo json_encode(false);
    }

 } else {

    echo json_encode("You are using another method");
 }

?>