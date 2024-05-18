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
    <title>DRE | History</title>
    <link rel="stylesheet" href="../Res/CSS/main.css">
    <link rel="stylesheet" href="../Res/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../Res/Bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<?php include('../Res/preperals/nav_bar.php')?>
    
    <div class="main container-fluid">
    <p class="h2 text-center">DRE History</p>
    <div class="row pt-5">
      <div class="col">
        <img src="../Res/img/BlackApartment.jpg" alt="Failed To Load" style="height: 4in; display: block; margin: auto auto;">
      </div>
      <div class="col h5">
      <p>DRE encountered challenges before becoming a successful small-business owner. </p>
      <p>DRE once ran a business called "Black Apartment," but it did not go well due to COVID-19, resulting in substantial financial losses. After years of losing business, one of the DRE owner's friends sponsors their business, and they are given the opportunity to start one, which is why DRE began through friendship.</p>
      <p>The owner enjoys food, particularly chicken. That's why DRE is well-known for its best-selling flavored chicken. DRE originates from the term PRE, which is an informal term to refer to a call for a friend. Its business is based on the sale of goods and services, which involves a buyer and a seller, a regular process, profit motives, and satisfying what the customer wants. </p>
      </div>
    </div>
    </div>

  <?php include('../Res/preperals/footer_bar.php')?>
</body>
</html>