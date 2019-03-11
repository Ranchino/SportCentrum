<?php session_start(); ?>

<html>
<title>SportCentrum</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css-files/styleSheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../Scripts/productPage.js"></script>
<script src="../Scripts/loginRegister.js"></script>



<body>

<?php 
/*   include './header.php'; */
?>


<?php
if(isset($_SESSION['choosen'])){
    print_r($_SESSION['choosen']);
} else {

    echo json_encode("There is not session saved");
}

?>

</body>
</html>