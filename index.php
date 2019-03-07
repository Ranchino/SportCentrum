<html>
<title>SportCentrum</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./css-files/styleSheet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./Scripts/productPage.js"></script>
<script src="./Scripts/loginRegister.js"></script>


<body class="w3-content" style="max-width:1200px">

<?php 
  include './view/header.php';
?>

   <!-- Image header -->
   <div class="w3-display-container w3-container">
    <img src="./Images/menMainPicture.jpg" style="width:100%; height: auto; margin-bottom: 10em;" >
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small" style=" color: black; background-color: white; margin-left: -0.5em;">New arrivals</h1>
      <h1 class="w3-hide-large w3-hide-medium" >New arrivals</h1>
      <h1 class="w3-hide-small" style=" color: black; background-color: white; margin-left: -1em;">Collection 2019</h1>
<!--       <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
 -->    </div>
  </div>


  <?php include_once("./view/footer.php") ?>

</body>
</html>
