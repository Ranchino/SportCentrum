<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="./Api/ajaxscript.js"></script>
    <title>Document</title>
</head>
<body >
<!-- login here user/admin -->
<form id="info">
        <h1>Log in Here user/admin</h1><br>
        <label>Email </label><br>
        <input type="text" name="username"><br>
        <label>Password </label><br>
        <input type="text" name="password"><br>
        <input type="submit"  name="clickedButton" onclick="return test()" value="click here">
</form><br>
<!-- Register new user here -->
<!-- <form id="registering">
        <h1>Register in Here New User </h1><br>
        <label>Mail</label><br>
        <input type="text" name="mail"><br>
        <label>Password</label><br>
        <input type="text" name="passwordRegister"><br>
        <label>Vill ha nyhetsbrev</label><br>
        <select name="nyhetsbrev"><br>
            <option value="ja">Ja</option>
            <option value="nej">Nej</option>
        </select><br>
        <input type="submit"  name="isClicked" onclick="return registerNewUser()" value="Register me">
</form> -->

<?php
//Working on redirect
/* if(isset($_SESSION['rol'])){
    if($_SESSION['rol'] == 'Admin') {
        header("Location: adminSite.php");
        die;
    } 
    if($_SESSION['rol'] == 'user'){
        header("Location: index.php");
        die;
    }
    
} */
?>
</body>
</html>