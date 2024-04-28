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
    <title>DRE | Manage Food</title>
    <link rel="stylesheet" href="../Res/CSS/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../Res/Bootstrap/css/bootstrap.min.css">
    <script src="../Res/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php if (isset($user)): ?>
    <?php if ($user["access_level"] == "admin"): ?>
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
                    <a class="nav-link" href="../Main/menu.php">Order</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../contact/contact.html">Contact</a>
                  </li>
                  <div class="vl">|</div>
                    <li class="nav-item">
                    <a class="nav-link" href="../web/home.php">Dash Board</a>
                    </li>
                    <div class="vl">|</div>
                  <li class="nav-item">
                  <a class="nav-link" href=""><img src="../Res/img/user.png" alt="Avatar Logo" style="width:30px;" class="rounded-pill"><?= htmlspecialchars($user["name"]) ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../web/logout.php">Logout</a>
                  </li>
                </ul>
              </div>
        </div>
    </nav>
    <div class="container-fluid manage-items main">
      <div class="glass-filter">
        <br><br>
      <p class="h1">Manage Menu | Add Food</p>
      <form action="" method="post" enctype="multipart/form-data">
        <table>
          <tr>
            <td>Food Name : </td>
            <td><input type="text" name="productname" id="pname" placeholder="Name Of The Item"></td>
          </tr>

          <tr>
            <td>Description : </td>
            <td><textarea name="description" id="description" cols="30" rows="5"></textarea></td>
          </tr>

          <tr>
            <td>Price : </td>
            <td><input type="number" name="price" id="price" placeholder="Price"></td>
          </tr>

          <tr>
            <td>Image : </td>
            <td><input type="file" name="image" id="image"></td>
          </tr>
        </table>
      </form>
      </div>
    </div>
    


    <?php else:?>
      <div class="main">
        <h1 style="color: white; margin: auto auto; display: block;">Why Are You Here?</h1>
        </div>
        <?php endif;?>
    <?php else:?>
      <div class="main">
        <h1 style="color: white; margin: auto auto; display: block;">Why Are You Here?</h1>
        </div>
    <?php endif;?>
</html>