<?php session_start()?>
<html>
<title>SportCentrum</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="./css-files/styleSheet.css">
<link rel="stylesheet" href="./css-files/style-mobile.css">
<link rel="stylesheet" href="./css-files/style-tablet.css">
<link rel="stylesheet" href="./css-files/widerTablet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="./Scripts/productPage.js"></script>
<script src="./Scripts/w3-school.js"></script>
<script src="./Scripts/loginRegister.js"></script>
<script src="./Scripts/sendNewsletter.js"></script>
<script src="./Scripts/shoppingCart.js"></script>




<body class="w3-content" style="max-width:1200px" onload="CheckSignIn()">

<?php 
  include './view/header.php';
?>

   <!-- Image header -->
   <div class="w3-display-container w3-container" style="height: 40em;">
    <img src="./Images/menMainPicture.jpg" class ="img-for-index">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
    <h1  class="h1-collection-style-text"> New Collection 2019</h1>
     </div>
  </div>
  <!-- section is the whole content and the div has four pictures -->
  <section id="content">
  <div></div>
  
  
  </section>
  
  <?php 
    include_once("./view/footer.php") 
  ?>


</body>
</html>
