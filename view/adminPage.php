<?php session_start()?>
<!DOCTYPE html>
<html>
<title>Admin</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css-files/adminStyleSheet.css">
<link rel="stylesheet" href="../css-files/adminStyleMobile.css">
<link rel="stylesheet" href="../css-files/adminStyleTablet.css">
<link rel="stylesheet" href="../css-files/style-mobile.css">
<link rel="stylesheet" href="../css-files/style-tablet.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../Scripts/productPage.js"></script>
<script src="../Scripts/newsletterView.js"></script>
<script src="../Scripts/orderView.js"></script>
<script src="../Scripts/w3-school.js"></script>

<body class="w3-light-grey" onload="refreshPage()">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">SportCentrum</span>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong>Admin</strong></span><br>
      <form method="post">
        <input type="submit"  class="logout-button" name="isLogOut" value="Logout">
    </form>
    <?php
    if(isset($_POST['isLogOut'])){
          header("Location: ../index.php");
          die();   
        
    }
    ?>
      <button class="switch-user-button">Switch User</button>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="../view/Addproduct.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Add Products</a>
    <a href="../view/updateStock.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i>  Update Products in stock</a>
    <button onclick=viewOrder() class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Orders</button>
    <button onclick=viewNewsletter() class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  Newsletter</button>
    
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Admin Dashboard</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>10</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Orders</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users Logged in</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Newsletter sent today</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Something</h4>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div id="tempForm" style='text-align:center'> 
        <template id="templeSub">
          <h3><b>Newsletter subscribers:</b></h3>
            <table class="w3-table w3-striped w3-white" id="newsletter" >
              <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>E-Mail</th>
                <th>Phone number</th>
              </tr>
            </table>
        </template>
      </div>
    </div>
  </div>

  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div id="orderForm" style='text-align:center'> 
        <template id="templeOrder">
          <h3><b>All orders:</b></h3>
          <div class="w3-responsive">
            <table class="w3-table w3-striped w3-white" id="orders" >
              <tr>
                <th>Order ID</th>
                <th>Shipper ID</th>
                <th>Ship FirstName</th>
                <th>Ship LastName</th>
                <th>Ship Adress</th>
                <th>Ship PostelCode</th>
                <th>Ship City</th>
                <th>Ship Mail</th>
                <th>Ship PhoneNo</th>
                <th>Total Price</th>
                <th>Order Date</th>
                <th>User ID</th>
              </tr>
            </table>
          </div>
        </template>
      </div>
    </div>
  </div>
  <div class="w3-panel">
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-twothird">
        <h5>Feeds</h5>
        <table class="w3-table w3-striped w3-white">
          <tr>
            <td><i class="fa fa-user w3-text-blue w3-large"></i></td>
            <td>New record, over 90 views.</td>
            <td><i>10 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bell w3-text-red w3-large"></i></td>
            <td>Database error.</td>
            <td><i>15 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-users w3-text-yellow w3-large"></i></td>
            <td>New record, over 40 users.</td>
            <td><i>17 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-comment w3-text-red w3-large"></i></td>
            <td>New comments.</td>
            <td><i>25 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-bookmark w3-text-blue w3-large"></i></td>
            <td>Check transactions.</td>
            <td><i>28 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-laptop w3-text-red w3-large"></i></td>
            <td>CPU overload.</td>
            <td><i>35 mins</i></td>
          </tr>
          <tr>
            <td><i class="fa fa-share-alt w3-text-green w3-large"></i></td>
            <td>New shares.</td>
            <td><i>39 mins</i></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>General Stats</h5>
    <p>New Visitors</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-green" style="width:25%">+25%</div>
    </div>

    <p>New Users</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-orange" style="width:50%">50%</div>
    </div>

    <p>Cancelled Orders</p>
    <div class="w3-grey">
      <div class="w3-container w3-center w3-padding w3-red" style="width:7%">7%</div>
    </div>
  </div>
  <hr>

  <hr>
  <div class="w3-container">
    <h5>Recent Orders</h5>
    <ul class="w3-ul w3-card-4 w3-white">
      <li class="w3-padding-16">
        <span class="w3-xlarge">""</span><br>
      </li>
      <li class="w3-padding-16">
        <span class="w3-xlarge">""</span><br>
      </li>
      <li class="w3-padding-16">
        <span class="w3-xlarge">""</span><br>
      </li>
    </ul>
  </div>
  <hr>

  
  <!-- Footer -->
  <footer class="w3-container w3-padding-16 w3-light-grey">
    <h4 style="color: black;">SportCentrum</h4>
  </footer>

  <!-- End page content -->
</div>

</body>
</html>
