<?php session_start(); ?>

<html>
<title>SportCentrum</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="../css-files/styleSheet.css">
<link rel="stylesheet" href="../css-files/style-mobile.css">
<link rel="stylesheet" href="../css-files/style-tablet.css">
<link rel="stylesheet" href="../css-files/shoppingCart.css">
<link rel="stylesheet" href="../css-files/shoppingCartDesktop.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../Scripts/productPage.js"></script>
<script src="../Scripts/loginRegister.js"></script>
<script src="../Scripts/w3-school.js"></script>
<script src="../Scripts/shoppingCart.js"></script>
<script src="../Scripts/loginRegisterShoppingcart.js"></script>



<body onload="checkChoosenProducts(); CheckSignIn()">
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide" style="color: solid black; font-size: 26px;">SportCentrum</h3>
    <h3 class="w3-wide" style="color: solid black; font-size: 26px;" id="userView"> </h3>
    <i class="fa fa-shopping-cart" style="font-size:40px;" onclick="redirectTheShoppingCart()" id="shoppingCart"></i>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey">
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">SportCentrum</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  

  <header class="w3-container w3-xlarge">
    <p class="w3-right">
    <button onclick="showLoginModal()" style="width:auto;" id="LoginPop">Login</button>
      <button style="width:auto; opacity: 0;" id="LogOut" onclick="makeEmptySession()">LogOut</button>
      
      
    <div id="id01" class="modal" style="background-color: white;">
  
  <form class="modal-content animate" id="info">

    <div class="container" id="loginShow">
    <h3>Sign In</h3>

      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      
      <input type="submit"  name="clickedButton" onclick="return test()" value="Sign In" style="background-color: lightgreen; border-radius: 0.5em;">
    </div>
    
  </form>

  <form id="registering">
    <div class="container" id="registerAccount">
      <h3 style="background-color: white;">Register As User or Admin</h3>
      <label for="mail"><b>Enter email</b></label>
      <input type="text" placeholder="Enter Username" name="mail" required>

      <label for="passwordRegister"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="passwordRegister" required>
      <label for="rol"><b>Role</b></label>
      <select name="rol">
      <option value="user">User</option>
      <option value="admin">Admin</option>
      </select>
      <label  style="background-color: white;">
        <input type="checkbox" checked="checked" name="nyhetsbrev"> Newsletter
      </label>

      
      <input type="submit"  name="isRegistered" onclick="return registerNewUser()" value="Register" style="background-color: lightgreen; border-radius: 0.5em;">
      </div>
    </form>

    <div class="container" style="background-color: white; text-align: center;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="registerHere">No account? <a href="#" onclick="switchToRegisterForm()">Register here!</a></span>
      <span class="signInHere" style="margin-bottom: 3em;">Already have an Account? <a href="#" onclick="switchToLoginForm()">Sign In!</a></span>

    </div>
</div>


    </p>
  </header>

  <a href="../index.php" class="go-back-tag">Go Back </a>



<h1>Please Check Your Added Products!</h1>
    <section id="content">
    </section>


<button onclick="DisPlayCheckOut()" style="margin-bottom: 1em; margin-left: 1em; height: 5em; width: 10em;">Checkout</button>

<div id="id09" class="modal">
  <span onclick="document.getElementById('id09').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/action_page.php">
    <div class="container">
      <h1>Almost Done!</h1>
      <p>Please fill in your checkout details.</p>
      <hr>

      <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Surname</label>
            <input type="text" id="fname" name="firstname" placeholder="Sven">
            <label for="lname"><i class="fa fa-user"></i> Lastname</label>
            <input type="text" id="lname" name="lastname" placeholder="Svensson">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Svenssongatan 14a">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Göteborg">
            <label for="postalcode"><i class="fa fa-institution"></i> Postal code</label>
            <input type="text" id="postalcode" name="postalcode" placeholder="43350">
            
            
            
            <p>By purchasing from our shop you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
            <div style="text-align: left;">
            <label for="orderingdate"><i class="fa fa-institution"></i> Ordering date</label>
            <input type="date" id="orderingDate" name="orderingdate">
                  </div>

            <div style="text-align: left;">
      <input type="radio" name="shippingMethod" value="DHL"> DHL<br>
      <input type="radio" name="shippingMethod" value="BRING"> BRING<br>
      <input type="radio" name="shippingMethod" value="POSTNORD"> POSTNORD<br>
      </div>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id09').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="button" onclick="wantToCheckOut()"> Check Out!</button>
      </div>
    </div>
  </form>
</div>



    <?php include_once("../view/footer.php") ?>
</body>
</html>