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
    <title>DRE | Blog</title>
    <link rel="stylesheet" href="../Res/CSS/main.css">
    <link rel="stylesheet" href="../Res/Bootstrap/css/bootstrap.min.css">
    <script src="../Res/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<nav>
        <div class="navbar navbar-expand-sm container fixed-top" id="navdiv">
            <img src="../Res/img/logo.png" alt="a">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="../web/home.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../AboutUs/AboutUs.php">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="gallery.php">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Main/menu.php">Order</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../contact/contact.html">Contact</a>
                  </li>
                  <div class="vl">|</div>
                  <?php if (isset($user)): ?>
                    <?php if ($user["access_level"] == "admin"): ?>
                    <li class="nav-item">
                    <a class="nav-link" href="../Dash/DashBoard.php">Dash Board</a>
                    </li>
                    <div class="vl">|</div>
                    <?php endif; ?>
                  <li class="nav-item">
                  <a class="nav-link" href="../User/profile-editor.php"><img src="../Res/img/user.png" alt="Avatar Logo" style="width:30px;" class="rounded-pill"><?= htmlspecialchars($user["name"]) ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../web/logout.php">Logout</a>
                  </li>
                  <?php else: ?>
                  <li class="nav-item">
                    <a class="nav-link" href="../User/login.php"><img src="../Res/img/user.png" style="width: 30px; display: inline-block;" alt="Login"> Login</a>
                  </li>
                  <?php endif; ?>
                </ul>
              </div>
        </div>
    </nav>
    
    <div class="main container-fluid">
    <p class="h2 text-center">DRE Blog</p>

    <p>
    This study focuses on how the online consumers of the DRE will be able to take <br> online web-based information systems hassle-free. Development of a web-based <br> information system for DRE will be helpful for both the restaurant and the users. <br>

The programming languages used in development of web-based information systems for DRE are HyperText Mark-Up Language (HTML),  Cascading Style Sheet (CSS), JavaScript(JS), PHP, SQL. The HyperText Mark-Up Language, Cascading Style Sheet, and Java Script will be used for the system’s front-end and PHP Admin and MySQL will serve the system's database and also the back-end of this system. 

The first feature that the users will see is the Landing page/Home Page of the system, where they can see the sign-up/log-in with the Register an Account button, a contact page that allows the users to send inquiries and feedback, and About Us that provides information about the system and its purpose. Other features are add, delete, edit, and a menu that allows users to view menu items and their order histories, manage orders, and access inventory and personal information.  

    </p>

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


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<footer style="background-color:  rgb(255, 235, 193); margin-top: 500px">
      <div class="container p-4">
        <div class="row">
          <div class="col-lg-3 col-md-12 mb-4">
            <h5 class="mb-3 text-dark">Content</h5>
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="#!" style="color: #4f4f4f; text-decoration: none;">Mission & Vision</a>
              </li>
              <li class="mb-1">
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Cookie" style="border: none; background: none; cursor: pointer; margin: 0; padding: 0;">
                <p style="color: #4f4f4f; text-decoration: none;">Cookies</p>
              </button>
              </li>
              <li class="mb-1">
                <a href="../AboutUs/AboutUs.php" style="color: #4f4f4f; text-decoration: none;">Privacy policy</a>
              </li>
              <li class="mb-1">
                <a href="history.php" style="color: #4f4f4f; text-decoration: none;">History</a>
              </li>
            </ul>

          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="mb-3 text-dark">Links</h5>
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="../web/home.php" style="color: #4f4f4f; text-decoration: none;">Home</a>
              </li>
              <li class="mb-1">
                <a href="../AboutUs/AboutUs.php" style="color: #4f4f4f; text-decoration: none;">AboutUs</a>
              </li>
              <li class="md-1">
                <a href="../web/gallery.php" style="color: #4f4f4f; text-decoration: none;">Gallery</a>
              </li>
              <li class="md-1">
                <a href="../Main/menu.php" style="color: #4f4f4f; text-decoration: none;">Order</a>
              </li>
              <li class="md-1">
                <a href="../contact/contact.html" style="color: #4f4f4f; text-decoration: none;">Contact</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="mb-3 text-dark">Follow Us</h5>
            <ul class="list-unstyled mb-0">
              <li class="mb-1">
                <a href="https://www.facebook.com/drecavite" style="color: #4f4f4f; text-decoration: none;"><i class="fa-brands fa-facebook fa-xl"></i> Facebook</a>
              </li>
              <li class="mb-1">
                <a href="https://www.instagram.com/dre.cavite/" style="color: #4f4f4f; text-decoration: none;"><i class="fa-brands fa-instagram fa-xl"></i> Instagram</a>
              </li>
              <li class="mb-1">
                <a href="https://www.tiktok.com/@drecavite" style="color: #4f4f4f; text-decoration: none;"><i class="fa-brands fa-tiktok fa-xl"></i> Tiktok</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <h5 class="mb-1 text-dark">Opening Hours</h5>
            <table class="table" style="border-color: #666;">
              <tbody>
                <tr>
                  <td>Mon:</td>
                  <td>Closed</td>
                </tr>
                <tr>
                  <td>Tues - Thurs:</td>
                  <td>2:00 PM - 10:00 PM</td>
                </tr>
                <tr>
                    <td>Fri - Sun:</td>
                    <td>12:00 PM - 10:00 PM</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class="text-center p-3">
        <h5 class="mb-1 text-dark">Located At</h5>
        <a href="https://maps.app.goo.gl/hg2YhZMNoCPscWoYA" style="text-decoration: none; color: #4f4f4f;"><i class="fa-solid fa-map"></i> Palacio de Antonio, 47 Tahimik St, Imus, 4103 Cavite <i class="fa-solid fa-map"></i></a>
      </div>
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2024 Copyright:
        <a class="text-dark" href="">Group 2</a>
      </div>
    </footer>
</body>
</html>