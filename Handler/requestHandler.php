<?php
    include_once("./adminHandler.php");
    include_once("./userHandler.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['username']) && isset($_POST["password"])){
            $password = $_POST['password'];
            $username = $_POST['username'];
            $admin = new Admin();
            $adminInfo = $admin->logInAdmin();
            $user = new User();
            $userInfo = $user->logInUser();
            if($username == $adminInfo->mail && $password == $adminInfo->password){
                echo json_encode('Du har loggat in!');
            }elseif($username == $userInfo->mail && $password == $userInfo->password){
                echo json_encode('Du har loggat in!');
            }
            else{
                echo json_encode('Du har fel inloggningsuppgifter!');
            }            
            
        }else{
            echo json_encode('vi hittar inte värde från input');
        }
    }else{
        echo json_encode("Post är inte satt");
    }

?>