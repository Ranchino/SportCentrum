<?php
session_start();
include_once("../Classes/adminClass.php");
include_once("../Classes/userClass.php");
$admin = new Admin();
$user = new User();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Here we check the sign in for both user and admin
    if(isset($_SESSION['rol'])){
        if($_SESSION['rol'] == 'admin') {
            header("Location: adminPage.php");
            die();
        } 
        if($_SESSION['rol'] == 'user'){
            header("Location: userPage.php");
            die();
        }

    }else {
        if(isset($_POST['username']) && isset($_POST["password"])){
            $password = $_POST['password'];
            $username = $_POST['username'];
            $userInfo = $user->logInUser();
            $adminInfo = $admin->logInAdmin();
            foreach($userInfo as $user) {
                if($user->password == $password && $user->mail == $username) {
                    //echo json_encode("Du har loggats in");
                    $rol = "user";
                    $_SESSION['rol'] = $rol;
                    echo json_encode($rol);
                    return;
                }    
            }
            foreach($adminInfo as $admin) {
                if($admin->password == $password && $admin->mail == $username) {
                    //echo json_encode("Du har loggats in");
                    $rol = "admin";
                    $_SESSION['rol'] = $rol;
                    echo json_encode($rol);
                    return;
                }    
            }
            echo json_encode("Det gick inte att loggas in");
            return;               
        //Here we register new user
        }
    }
    if(!empty($_POST['passwordRegister']) && !empty($_POST['mail']) && !empty($_POST['nyhetsbrev'])) {
        $password = $_POST['passwordRegister'];
        $mail = $_POST['mail'];
        if($_POST['nyhetsbrev'] == "ja") {
            $nyhetsbrev = 1;
        }else {
            $nyhetsbrev = 0;
        }
        $allUsers = $user->logInUser();
        foreach($allUsers as $person) {
            if($person->password == $password && $person->mail == $mail) {
                echo json_encode("Du finns redan i systement.");
                return;
            }
   
        }
        $addedNew = $user->insertNewUser($password, $mail, $nyhetsbrev);
        echo json_encode($addedNew);
    } else {

        echo json_encode("Det gick inte att registera dig");
    }

}
?>