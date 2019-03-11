<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css-files/styleSheet.css">
    <link rel="stylesheet" href="../css-files/style-mobile.css">
    <link rel="stylesheet" href="../css-files/style-tablet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./Scripts/productPage.js"></script>
    <script src="./Scripts/w3-school.js"></script>
    <script src="./Scripts/loginRegister.js"></script>

    <title>Document</title>

</head>

<body>

    <header class="header-for-userPage">
    <p style="color: white; text-align: center;">Welcome!</p>
    <form  class=" user-page-form" method="post">
        <input style =" border-radius: 0.5em; background-color: black; color: white;" type="submit"  name="isClicked" value="Go back!">
    </form>
    </header>

    <div class="user-side-bar">
        <ul class="unordered-list">
            <li style="padding: 1em;">Number of orders : </li>
            <li style="padding: 1em;">Recieved Orders : </li>
            <li style="padding: 1em;">Shipping Methods : </li>
            <li style="padding: 1em;">Payment Action : </li>
            <li style="padding: 1em;">Change Shipping Adress : </li>
        </ul>
    </div>

    <?php

    if(isset($_POST['isClicked'])){
          header("Location: ../index.php");
          die();   
        
    }
    ?>
    <!-- Here we are going to specify the user and select the order and data for this user -->
</body>
</html>