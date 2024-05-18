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
        <title>DRE | Gallery</title>
        <link rel="stylesheet" href="../Res/CSS/main.css">
        <link rel="stylesheet" href="../Res/preperals/ActivatedNavGallery.css">
        <link rel="stylesheet" href="../Res/Bootstrap/css/bootstrap.min.css">
        <script src="../Res/Bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="gallery-style.css">
    </head>
    <body>

  <?php include('../Res/preperals/nav_bar.php')?>


        <div class="container-fluid main">
        <div class="image-grid">
            <img class="image-grid-col-2 image-grid-row-2" src="../Res/img/Gallery/IMG_7571.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7453.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7460.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7498.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7468.png" alt="error">
            <img class="image-grid-row-2" src="../Res/img/Gallery/IMG_578803.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7471.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7458.png" alt="error">
            <img class="image-grid-col-2"src="../Res/img/Gallery/IMG_7477crop.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7500.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7464.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7504.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7552crop.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7481.png" alt="error">
            <img src="../Res/img/Gallery/IMG_7519.png" alt="error">
        </div>

        <!-- you can add your own assets -->
        <hr>
        <hr>
        
        <div class="image-grid">
            
        </div>
        </div>
      </div>
    </div>
  </div>
    <?php include('../Res/preperals/footer_bar.php')?>
    </body>
</html>