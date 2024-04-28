<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM drefooddb
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DRE | DashBoard</title>
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
                    <a class="nav-link" href="../web/gallery.php">Gallery</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../Main/menu.php">Order</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../contact/contact.html">Contact</a>
                  </li>
                  <div class="vl">|</div>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Dash Board</a>
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
    <br>
    <div class="container main">
    <h1>Admin Dashboard</h1>
    <div class="h-line"></div>
    <button class="btn btn-light btn-sm" style="padding: 15px;"><a href="../Dash/manage_food.php" style="text-decoration: none; color: black; font-weight: bold;">Manage Food</a></button>
    <div class="h-line"></div>
    <div class="manage-admin">
      <p class="h2 title">
        Manage <span>Food</span>
      </p>
    <div class="container">
      <form method="post">
        <input type="text" placeholder="Name" name="search">
        <button class="btn btn-dark btn-sm" name=submit>Search</button>
      </form>
      <div class="container">
        <table class="member-table">
          <?php 
          if(isset($_POST['submit'])){
            $search = $_POST['search'];
            $sqlsearch = "SELECT * FROM `drefood` WHERE id='$search' or title='$search' or price='$search'";
            $result =mysqli_query($mysqli, $sqlsearch);
            if($result){
              if(mysqli_num_rows($result)>0){
                echo '<tread>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Access Level</th>
                </tr>
                </tread>
                ';
              }
              while($row=mysqli_fetch_assoc($result)){
                echo '<tbody>
                <tr>
                <td>'.$row['id'].'</td>
                <td>'.$row['title'].'</td>
                <td>'.$row['description'].'</td>
                <td>'.$row['price'].'</td>
                <td>'.$row['category_id'].'</td>
                <td>'.$row['featured'].'</td>
                <td>'.$row['active'].'</td>
                </tr>
                </tbody>
                ';
              }
            } else {
              echo '<p class="h4"> No Data Available :( </p>';
            }
          } else {
            echo '<p class="h4"> No Data Available :( </p>';
          }
          ?>
        </table>
      </div>
    </div>
    </div>
    </div>

    <?php else:?>
        <h1>Why Are You Here?</h1>
        <?php endif;?>
    <?php else:?>
        <h1>Why Are You Here?</h1>
    <?php endif;?>
</body>