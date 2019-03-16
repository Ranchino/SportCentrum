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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css-files/styleSheet.css">
    <link rel="stylesheet" href="../css-files/style-mobile.css">
    <link rel="stylesheet" href="../css-files/style-tablet.css">
    <link rel="stylesheet" href="../css-files/widerTablet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../Scripts/productPage.js"></script>
    <script src="../Scripts/w3-school.js"></script>
    <script src="../Scripts/loginRegister.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <title>Document</title>

</head>

<body>


    <form method="post">
        <input class="go-back-user-page" type="submit"  name="isClicked" value="Go back!">
    </form>

    <nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="../view/adminPage.php">Sportcentrum</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">Discounts</a></li>
        <li><a href="#">Free shipping back</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h3>Sportcentrum</h3>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="#section2">Discounts</a></li>
        <li><a href="#section3">Free shipping back</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h4>Welcome</h4>
        <p>""</p>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Orders</h4>
            <p>""</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Shipping Date</h4>
            <p>""</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Cost</h4>
            <p>""</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="well">
            <h4>well believe in:</h4> 
            <p>Quality</p> 
            <p>Service</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <h4>We also believe in:</h4> 
            <p>Pricing</p> 
            <p>Free shipping back</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <h4>And dont forget:</h4> 
            <p>Fairtrade</p> 
            <p>EU based salary!</p> 
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="well">
            <p>If you have any questions regarding our word and products feel free to contact us!</p> 
          </div>
        </div>
        <div class="col-sm-4">
          <div class="well">
            <q>When you're single and in your 20s, you throw on a pair of jeans and look fabulous.</q> 
          </div>
        </div>
      </div>
    </div>
  </div>
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