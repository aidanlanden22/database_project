<!DOCTYPE html>
<html>
<title>Threadswap</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>THREADSWAP</b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="ShirtsSelect.php" class="w3-bar-item w3-button">Shirts</a>
    <a href="DressesSelect.php" class="w3-bar-item w3-button">Dresses</a>
    <a href="PantsSelect.php" class="w3-bar-item w3-button">Pants</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="myBtn">
      Accessories <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="AccessoriesSelect.php" class="w3-bar-item w3-button w3-light-grey">All Accessories</a>
      <a href="HatsSelect.php" class="w3-bar-item w3-button w3-light-grey">Hats</a>
      <a href="RingsSelect.php" class="w3-bar-item w3-button w3-light-grey">Rings</a>
      <a href="EarringsSelect.php" class="w3-bar-item w3-button w3-light-grey">Earrings</a>
      <a href="NecklacesSelect.php" class="w3-bar-item w3-button w3-light-grey">Necklaces</a>
      <a href="ScarvesSelect.php" class="w3-bar-item w3-button w3-light-grey">Scarves</a>
    </div>
    <a href="ShoesSelect.php" class="w3-bar-item w3-button">Shoes</a>
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">threadswap</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Clothing</p>
    <p class="w3-right">
      <?php
      if (isset($_SESSION["user"])) {
      echo "Hi, " . $_SESSION["user"];
    }
    else {
    echo '<a style="text-decoration: none;" href="loginPage.php" name="LogInbtn"> Log In </a>';
  }
  ?>
      <i class="fa fa-shopping-cart w3-margin-right"></i>
<!--       <i class="fa fa-search"></i>
 -->    </p>
  </header>
<form action="ClothingSelect.php" method="post">
  <input type="text" name="Size">
  <input type="Submit">
</form>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="/w3images/jeans.jpg" alt="Jeans" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
      <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
      <h1 class="w3-hide-small">COLLECTION 2016</h1>
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
    <p>8 items</p>
  </div>

  <!-- Product grid -->
  <div class="w3-row w3-grayscale">
    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="/w3images/jeans1.jpg" style="width:100%">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
      <div class="w3-container">
        <img src="/w3images/jeans2.jpg" style="width:100%">
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="/w3images/jeans2.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">New</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Mega Ripped Jeans<br><b>$19.99</b></p>
      </div>
      <div class="w3-container">
        <img src="/w3images/jeans3.jpg" style="width:100%">
        <p>Washed Skinny Jeans<br><b>$20.50</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="/w3images/jeans3.jpg" style="width:100%">
        <p>Washed Skinny Jeans<br><b>$20.50</b></p>
      </div>
      <div class="w3-container">
        <div class="w3-display-container">
          <img src="/w3images/jeans4.jpg" style="width:100%">
          <span class="w3-tag w3-display-topleft">Sale</span>
          <div class="w3-display-middle w3-display-hover">
            <button class="w3-button w3-black">Buy now <i class="fa fa-shopping-cart"></i></button>
          </div>
        </div>
        <p>Vintage Skinny Jeans<br><b class="w3-text-red">$14.99</b></p>
      </div>
    </div>

    <div class="w3-col l3 s6">
      <div class="w3-container">
        <img src="/w3images/jeans4.jpg" style="width:100%">
        <p>Vintage Skinny Jeans<br><b>$14.99</b></p>
      </div>
      <div class="w3-container">
        <img src="/w3images/jeans1.jpg" style="width:100%">
        <p>Ripped Skinny Jeans<br><b>$24.99</b></p>
      </div>
    </div>
  </div>

    <footer>
      <div class="w3-col s4">
        <h4>About</h4>
        <p><a href="BoutiquesSelect.php">Our Boutiques</a></p>
        <p><a href="SellersSelect.php">Our Individual Sellers</a></p>
        <p><a href="#">Login To Your Account</a></p>
        <p><a href="#">Your Orders</a></p>
      </div>

      <div class="w3-col s4 w3-justify">
        <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Threadswap</p>
        <h4>We accept</h4>
        <p><i class="fa fa-fw fa-credit-card"></i> Credit Card</p>
        <br>
      </div>
    </div>
  </footer>

<!--   <div class="w3-black w3-center w3-padding-24">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></div> -->

  <!-- End page content -->
</div>

<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
