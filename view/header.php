<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide" style="color: solid black; font-size: 26px;">SportCentrum</h3>
    <i class="fa fa-shopping-cart" style="font-size:40px;" onclick="redirectTheShoppingCart()" id="shoppingCart">

  </div>
  <div class="w3-padding-32 w3-large w3-text-grey">


    <form id="productPage" style="margin-left: 0.5em; margin-bottom: 0.1em;">
        <select name='categoryName' style="background-color: white;" id="linksOption">
          <option value='men'>Men</option>
          <option value='women'>Women</option>
            <option value='children'>Children</option>
            <option value='accessories'>Accessories</option>
            <option value='allProducts'>All Products</option>
        </select>
        <input type='submit' value='Search' name='submit' onclick="redirectForm()" style="border-radius: 0.5em; font-family: Montserrat, sans-serif; outline: none; font-size: 12px; background-color: #4CAF50;
color: white;" >
    </form>

<?php

/* if(isset($_GET['submit'])){
  $var = $_GET['linkSite'];
  //When there is view in the url
  if (stripos($_SERVER['REQUEST_URI'],'/view/') !== false) {
    if($var == "women"){
      header("Location: ./womenSite.php");
    }
    if($var == "children"){
      header("Location: ./childrenSite.php");
    }
    if($var == "men"){
      header("Location: ../index.php");
    }
    if($var == "accessories"){
      header("Location: ./accessoriesSite.php");
    }
  }
  //When there is no view 
  else {
    if($var == "women"){
      header("Location: ./view/womenSite.php?linkSite=$var");
    
    }
    if($var == "children"){
      header("Location: ./view/childrenSite.php");
    }
    if($var == "men"){
      header("Location: ./index.php");
    }
    if($var == "accessories"){
      header("Location: ./view/accessoriesSite.php");
    }

    
  }
} */
?>
  <a class="w3-bar-item w3-button w3-padding" href="#footer">Contact</a> 
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Newsletter</a> 
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <a id="sportcentrum-title" class="w3-bar-item w3-padding-24 w3-wide" href="index.php">SportCentrum</a>
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
      <button onclick="showLoginModal()" style="width:auto;">Login</button>
      
      
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



