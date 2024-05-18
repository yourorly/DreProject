<link rel="stylesheet" href="../Res/preperals/additionalmenu.css">
<link rel="stylesheet" href="../Res/Css/main.css">

<button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#Menu">
  <img src="../Res/img/menuico.png" style="height: 60px;">
</button>

<div class="offcanvas offcanvas-start" data-bs-theme="dark" id="Menu">
      <div class="offcanvas-header">
        <h1 class="offcanvas-title">Ehhhh?</h1>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
      </div>
      <div class="offcanvas-body">
        <?php if (isset($user)): ?>
            <a href="../User/profile-editor.php"><?= htmlspecialchars($user["name"]) ?></a>
            <div class="h-line"></div>
            <a href="../web/logout.php" class="bottom">Logout</a>
          <?php if ($user["access_level"] == "admin"): ?>
            <a href="../Dash/DashBoard.php">Dash Board</a>
          <?php endif; ?>
          <?php else: ?>
            <a href="../User/login.php" class="bottom">Login</a>
          <?php endif; ?>
      </div>
    </div>