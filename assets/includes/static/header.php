<?php
  $header_users = $db__conn->prepare("SELECT * FROM users WHERE id = ?");
  $header_users->execute(array($_SESSION["id"]));

  $header_users_admin = $header_users->fetch();
?>
<header>
  <img id="header-icon" src="./assets/img/lsmc.png"/>

  <div class="nav">
    <a href="./home"><?php echo $header[0]; ?></a>
    <a href="./reports"><?php echo $header[1]; ?></a>
    <a href="./records"><?php echo $header[2]; ?></a>
    <a href="./staff"><?php echo $header[3]; ?></a>
    <?php if($header_users_admin["is_admin"] == 1) { ?>
      <a href="./admin"><?php echo $header[4]; ?></a>
    <?php }; ?>
    <a href="./protocol/disconnect.php"><?php echo $header[5]; ?></a>
  </div>
  <?php
  // Please, don't edit this part.
  ?>
  <footer>
    EMS WebPanel &copy; <?php echo date("Y"); ?><br/>
    <a href="https://github.com/Offshorp/">Offshorp</a> &copy; 2020 - <?php echo date("Y").'<br/>'.$allrigts; ?>
  </footer>
  <?php
  // Please, don't edit this part.
  ?>
</header>
