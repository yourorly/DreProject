<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DRE | Home</title>
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="../Res/CSS/main.css">
    <link rel="stylesheet" href="../Res/preperals/ActivatedNavHome.css">
    <link rel="stylesheet" href="../Res/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Res/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php include('../Res/preperals/nav_bar.php')?>
      
    <div class="main container-fluid">
      <div class="intro-img"></div>
    </div>

    <div class="coverbackground">
    <div class="container">
    <div id="pictures" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#pictures" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#pictures" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#pictures" data-bs-slide-to="2"></button>
      <button type="button" data-bs-target="#pictures" data-bs-slide-to="3"></button>
      <button type="button" data-bs-target="#pictures" data-bs-slide-to="4"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../Res/img/Pics/eat.gif" alt="" class="d-block w-100" >
      </div>
      <div class="carousel-item">
        <img src="../Res/img/Pics/Berber.png" alt="" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="../Res/img/Pics/Juicy.png" alt="" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="../Res/img/Pics/Yum.png" alt="" class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="../Res/img/Pics/YumBurger.png" alt="" class="d-block w-100">
      </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#pictures" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#pictures" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
    </div>
    </div>
    </div>


    <div class="background-img">
        <div class="glass-filter">
            <br><br><br>
            <div class="title">
                <h2>Popular picks</h2>
            </div>
            <br>
            <div class="popular-picks">
                <div class="items">
                    <img src="../Res/img/Gallery/IMG_7453.png" alt="chicken">
                    <p class="food-names">Chicken buffalo</p>
                    <p class="price">₱01.00</p>
                    <!-- baka pwedeng maglead yun button sa parang menu page -->
                    <button class="view-button">
                        <span class="button-text">view</span>
                    </button>
                </div>
                <div class="items">
                    <img src="../Res/img/Gallery/IMG_7458.png" alt="chicken">
                    <p class="food-names">Chicken wings</p>
                    <p class="price">₱01.00</p>
                    <button class="view-button">
                        <span class="button-text">view</span>
                    </button>
                </div>
                <div class="items">
                    <img src="../Res/img/Gallery/IMG_7460.png" alt="chicken">
                    <p class="food-names">Burger</p>
                    <p class="price">₱01.00</p>
                    <button class="view-button">
                        <span class="button-text">view</span>
                    </button>
                </div>
            <div>    
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
    <div class="container">
    <div class="about-us">
        <img class="about-us-img" src="../Res/img/Gallery/IMG_7468.png" alt="img">
        <h1 class="about-us-title">About Us</h1>
        <p class="description">
            Serving you comfort food that
            warm your soul.
        </p>
        <br>
        <a href="../AboutUs/AboutUs.php">
            <button class="about-button">
                <span class="button-text">Learn More...</span>
            </button>
        </a>
    </div>
    </div>
  </div>
  </div>
  <?php include('../Res/preperals/footer_bar.php')?>
</body>
</html>