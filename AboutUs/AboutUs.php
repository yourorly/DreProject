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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About DRE</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Res/CSS/main.css">
    <link rel="stylesheet" href="../Res/preperals/ActivatedNavAbout.css">
    <link rel="stylesheet" href="../Res/Bootstrap/css/bootstrap.min.css">
    <script src="../Res/Bootstrap/js/bootstrap.min.js"></script>

</head>
<body>
<?php include('../Res/preperals/nav_bar.php')?>

    <!-- Main -->
    <div class="main container-fluid">
        <section class="dre">

            <br><br><br>
            <div class="heading">
                <h1>About Us</h1>
            </div>
            <div class="row">
                <div class="col">
                    <div class="container">
                    <div class="dre-content">
                        <h2>Welcome to DRE</h2>
                        <p>The DRE food business is commonly known for their tastiest and flavored chicken. They also
                            have their best seller burgers which are consistent through the ingredients and you could truly
                            expect the same thing as you see in their menu. The DRE serves their customers with a warmth
                            and best service that they can provide. The shop is not that big but, the vibe and feeling of the
                            whole resto are really encouraging and a better place to eat together with your family and friends.
                            </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="dre-image">
                    <img src="IMG_7561.png">
                </div>
            </div>
            </div>
         </section>
    </div>

    <!-- Cookies Modal -->
  <div class="modal" id="Cookie">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title">Cookie Usage Terms of Service</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>

        <div class="modal-body">
          <h3>Introduction</h3>
          <p>Welcome to our website! By using our services, you agree to the following terms related to cookies. Please read them carefully.</p><br>
          <h4>Your Relationship with Our Website</h4>
          <p>These terms define the relationship between you and our website. When we refer to “our website,” we mean the services provided by us. By using our services, you agree to follow these terms.</p>
          <h4>What You Can Expect from Us</h4>
          <p><span style="font-weight : bold;">1. Provide Useful Services:</span> We aim to offer a broad range of useful services to enhance your browsing experience <br>
          <span style="font-weight : bold;">2. Use Cookies:</span> Our website uses cookies to personalize your experience. Cookies are small pieces of information stored on your computer via your web browser. They may contain your preferences or inputs when accessing our website. <br>
          <span style="font-weight : bold;">3. Respect Your Privacy:</span> We respect your privacy and handle cookies in accordance with our Privacy Policy. </p> 
          <h4>What We Expect from You</h4>
          <p><span style="font-weight : bold;">1. Acceptance of Cookies:</span> By using our website, you consent to the use of cookies. You can customize your web browser settings to accept, reject, or delete cookies. <br>
          <span style="font-weight : bold;">2. Compliance with Laws:</span> You agree to comply with all applicable laws and regulations related to cookies and online privacy. <br>
          <span style="font-weight : bold;">3. No Unauthorized Access:</span> Do not attempt to access or manipulate cookies beyond what is allowed by our website. </p>
          <h4>Content in Our Services </h4>
          <p>
          <span style="font-weight : bold;">1. Intellectual Property Rights:</span> The content you find on our website may belong to us, you, or others. Respect intellectual property rights. <br>
          <span style="font-weight : bold;">2. Reporting Issues:</span> If you encounter problems or disagreements related to cookies, please contact us. </p>
          <h4>In Case of Problems or Disagreements</h4>
          <p>
          <span style="font-weight : bold;">1. Governing Law: </span>Philipines law governs disputes arising from these terms. <br>
          <span style="font-weight : bold;">2. Jurisdiction:</span> Disputes will be resolved exclusively in the federal or state courts</p>
          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>


  <?php include('../Res/preperals/footer_bar.php')?>
</body>
</html>