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
    <title>Food Menu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=l.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Res/preperals/ActivatedNavMenu.css">
    <link rel="stylesheet" href="../Res/CSS/main.css">
    <link rel="stylesheet" href="../Res/Bootstrap/css/bootstrap.min.css">
    <script src="../Res/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<body>
<?php include('../Res/preperals/nav_bar.php')?>

    <div class="container-fluid main">
<div class="glass-filter">
<?php if (isset($user)): ?>
<?php if ($user["access_level"] == "admin"): ?>
  <button class="btn btn-light btn-sm" style="padding: 15px;"><a href="../Dash/manage_food.php" style="text-decoration: none; color: black; font-weight: bold;">Manage Food</a></button>
<?php endif; ?>
<?php endif; ?>
    <div class="menu">
        <div class="items">
            <img src="menu/cheeseburger.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Cheese Burger</h5>
                    <h5 class="price">₱100.00    </h5>
                </div>
                <p>Savor the succulent blend of perfectly grilled beef, melted cheddar cheese, and crisp lettuce nestled between two toasted sesame seed buns, creating a symphony of flavors in every bite.</p>
            </div>
        </div>

        <div class="items">
            <img src="menu/chickenburger.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Chicken Burger</h5>
                    <h5 class="price">₱100.00</h5>
                </div>
                <p>Indulge in the tantalizing taste of tender, juicy chicken breast, delicately seasoned and cooked to perfection, and saucy barbecue sauce, all embraced by a soft, toasted bun.</p>
            </div>
        </div>
        
        <div class="items">
            <img src="menu/doublecheeseburger.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>DoubleCheese Burger</h5>
                    <h5 class="price">₱100.00</h5>
                </div>
                <p>Experience the ultimate carnivorous delight with our double cheeseburger, perfectly charred and smothered in cheese, layered with fresh lettuce, ripe tomatoes, and zesty pickles, all hugged by a warm, toasted sesame seed bun, delivering double the satisfaction in every savory bite.</p>
            </div>
        </div>

        <div class="items">
            <img src="menu/bbqchickenwing.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>BBQ Chicken Wings</h5>
                    <h5 class="price">₱100.00</h5>
                </div>
                <p>Indulge in our BBQ chicken wings, perfectly seasoned and smothered in a mouthwatering barbecue sauce, each bite offering a harmonious blend of smoky sweetness and savory succulence that will leave you craving another round.</p>
            </div>
        </div>

        <div class="items">
            <img src="menu/garlicchickenwing.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Garlic Chicken Wings</h5>
                    <h5 class="price">₱100.00</h5>
                </div>
                <p>Savor the irresistible aroma and robust flavor of our garlic-infused chicken wings, delicately seasoned with aromatic herbs and spices, then oven-baked to golden perfection, ensuring each bite is a burst of garlicy goodness that will leave you longing for more.</p>
            </div>
        </div>

        <div class="items">
            <img src="menu/honeychickenwings.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Honey Chicken Wings</h5>
                    <h5 class="price">₱100.00</h5>
                </div>
                <p>Experience the sweet and savory perfection of our honey-glazed chicken wings, lovingly coated in a luscious honey marinade, then oven-baked to caramelized perfection, creating a delectable harmony of flavors that will have your taste buds dancing with delight.</p>
            </div>
        </div>
        
        <div class="items">
            <img src="menu/buffalochickenwings.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Buffalo Chicken Wings</h5>
                    <h5 class="price">₱100.00</h5>
                </div>
                <p>Indulge in the fiery excitement of our buffalo chicken wings, coated in a tangy and spicy buffalo sauce that packs a punch with every bite, offering a tantalizing balance of heat and flavor that will ignite your palate and keep you coming back for more.</p>
            </div>
        </div>
    </div>
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