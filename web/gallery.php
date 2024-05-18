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
<!-- Naka Backup na dont worry pwede mo na delete toh -->
<!-- okays:] -->
<!-- 
        
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
 -->

        <div class="title-container">
            <h1 class="title">
                Photo <span class="title-span">Gallery</span>
            </h1>
        </div>

        <div class="container-fluid main">
          <div class="image-grid">
              <a href="https://images2.alphacoders.com/529/529593.jpg" target="_blank">
                  <img class="gallery-image" src="https://images2.alphacoders.com/529/529593.jpg" alt="error">
              </a>
              <a href="https://th.bing.com/th/id/R.26e80d185c6f2d3728436694b5a086bd?rik=OT2gZTsPzQeAQw&riu=http%3a%2f%2flivestly.com%2fwp-content%2fuploads%2f2018%2f06%2fboba-hero.png&ehk=BYAxn6LUYI6ADPCS2v10WKeUgnbqTlmz4AZJS8kICm0%3d&risl=&pid=ImgRaw&r=0" target="_blank">
                  <img class="gallery-image" src="https://th.bing.com/th/id/R.26e80d185c6f2d3728436694b5a086bd?rik=OT2gZTsPzQeAQw&riu=http%3a%2f%2flivestly.com%2fwp-content%2fuploads%2f2018%2f06%2fboba-hero.png&ehk=BYAxn6LUYI6ADPCS2v10WKeUgnbqTlmz4AZJS8kICm0%3d&risl=&pid=ImgRaw&r=0" alt="error">
              </a>
              <a href="https://th.bing.com/th/id/OIP.YPV4i3MI_pN_w0Q0BjdzwgAAAA?rs=1&pid=ImgDetMain" target="_blank">
                  <img class="gallery-image" src="https://th.bing.com/th/id/OIP.YPV4i3MI_pN_w0Q0BjdzwgAAAA?rs=1&pid=ImgDetMain" alt="error">
              </a>
              <a href="https://www.wikihow.com/images/2/2e/Make-Homemade-Cheese-Fries-Step-12.jpg" target="_blank">
                  <img class="gallery-image" src="https://www.wikihow.com/images/2/2e/Make-Homemade-Cheese-Fries-Step-12.jpg" alt="error">
              </a>
              <a href="https://th.bing.com/th/id/R.981033b77f4944c4dbd7f4fe5dddb210?rik=DqZcBX%2f5ULlmEQ&riu=http%3a%2f%2fimage.made-in-china.com%2f2f0j00cKgQRpTPVDqB%2fPopping-Boba-for-Boba-Tea.jpg&ehk=n%2b%2bzJcDSNdI4lueVnW9u5yLsIHj19cCjU8c69ozoohQ%3d&risl=&pid=ImgRaw&r=0" target="_blank">
                  <img class="gallery-image" src="https://th.bing.com/th/id/R.981033b77f4944c4dbd7f4fe5dddb210?rik=DqZcBX%2f5ULlmEQ&riu=http%3a%2f%2fimage.made-in-china.com%2f2f0j00cKgQRpTPVDqB%2fPopping-Boba-for-Boba-Tea.jpg&ehk=n%2b%2bzJcDSNdI4lueVnW9u5yLsIHj19cCjU8c69ozoohQ%3d&risl=&pid=ImgRaw&r=0" alt="error">
              </a>
              <a href="https://th.bing.com/th/id/OIP.KtVkR019Fi5kKRSVnyrvQwAAAA?rs=1&pid=ImgDetMain" target="_blank">
                  <img class="gallery-image" src="https://th.bing.com/th/id/OIP.KtVkR019Fi5kKRSVnyrvQwAAAA?rs=1&pid=ImgDetMain" alt="error">
              </a>
              <a href="https://www.thespruceeats.com/thmb/C7b0KJGGltZW99RX8I1zBTpbNto=/1500x1000/filters:fill(auto,1)/traditional-chicken-wings-912937-10-5b3f8c9ac9e77c00547241ab.jpg" target="_blank">
                  <img class="gallery-image" src="https://www.thespruceeats.com/thmb/C7b0KJGGltZW99RX8I1zBTpbNto=/1500x1000/filters:fill(auto,1)/traditional-chicken-wings-912937-10-5b3f8c9ac9e77c00547241ab.jpg" alt="error">
              </a>
              <a href="https://th.bing.com/th/id/OIP.CXSdVA534SoWs8OWhFZf2gAAAA?rs=1&pid=ImgDetMain" target="_blank">
                  <img class="gallery-image" src="https://th.bing.com/th/id/OIP.CXSdVA534SoWs8OWhFZf2gAAAA?rs=1&pid=ImgDetMain" alt="error">
              </a>
              <a href="https://thoughtcatalog.com/wp-content/uploads/2015/04/8654652972_429ed18fde_k.jpg" target="_blank">      
                  <img class="gallery-image" src="https://thoughtcatalog.com/wp-content/uploads/2015/04/8654652972_429ed18fde_k.jpg" alt="error">
              </a>
              <a href="https://www.certifiedirishangus.ie/wp-content/uploads/2019/11/TheUltimateBurgerwBacon_RecipePic.jpg" target="_blank">
                  <img class="gallery-image" src="https://www.certifiedirishangus.ie/wp-content/uploads/2019/11/TheUltimateBurgerwBacon_RecipePic.jpg" alt="error">
              </a>
              <a href="https://th.bing.com/th/id/R.28f40551a8dadc263e290ce22224bfe7?rik=51vYJkyRyxoyLA&riu=http%3a%2f%2fwww.cuisineetsentiments.com%2fimages%2fmilkshake_2.jpg&ehk=glAZJyRaryVvrsK9qbk6t2wlBoWMKaYZyrQa9HHE0QI%3d&risl=&pid=ImgRaw&r=0" target="_blank">
                  <img class="gallery-image" src="https://th.bing.com/th/id/R.28f40551a8dadc263e290ce22224bfe7?rik=51vYJkyRyxoyLA&riu=http%3a%2f%2fwww.cuisineetsentiments.com%2fimages%2fmilkshake_2.jpg&ehk=glAZJyRaryVvrsK9qbk6t2wlBoWMKaYZyrQa9HHE0QI%3d&risl=&pid=ImgRaw&r=0" alt="error">
              </a> 
          </div>
        </div>

            
        
      
    </div>
  </div>
    <?php include('../Res/preperals/footer_bar.php')?>
    </body>
</html>