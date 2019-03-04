<?php
include_once("./adminHandler.php");
include_once("./userHandler.php");
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Here we check the sign in for both user and admin
    if(isset($_POST['username']) && isset($_POST["password"])){
        $password = $_POST['password'];
        $username = $_POST['username'];
        $admin = new Admin();
        $adminInfo = $admin->logInAdmin();
        $user = new User();
        $userInfo = $user->logInUser();
        foreach($userInfo as $user) {
            if($user->password == $password && $user->mail == $username) {
                echo json_encode("Du har loggats in");
                return;
            }    
        }
        foreach($adminInfo as $admin) {
            if($admin->password == $password && $admin->mail == $username) {
                echo json_encode("Du har loggats in");
                return;
            }    
        }
        echo json_encode("Det gick inte att loggas in");
        return;               
    //Here we register new user
    }
    else{
        echo json_encode('vi hittar inte värde från input');
    }


    

}else{
    echo json_encode("Post är inte satt");
}



?>