<?php session_start()?>
<html>
<title>SportCentrum</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css-files/styleSheet.css">
<link rel="stylesheet" href="../css-files/style-mobile.css">
<link rel="stylesheet" href="../css-files/style-tablet.css">
<link rel="stylesheet" href="../css-files/widerTablet.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../Scripts/sendNewsletter.js"></script>
<script src="../Scripts/productPage.js"></script>
<script src="../Scripts/w3-school.js"></script>
<script src="../Scripts/loginRegister.js"></script>
<script src="../Scripts/shoppingCart.js"></script>



<body class="w3-content" onload="getTheseProducts(); CheckSignIn()">

<?php 
  include './header.php';
  ?>

  <a href="../index.php" class="go-back-tag">Go Back </a>
  <h2 class="title"></h2>
<h1 class="title"></h1>
<section id="content">
</section>

<?php 
include './footer.php';
?>

</body>

</html>