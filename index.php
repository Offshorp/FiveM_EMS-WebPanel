<?php
  require './assets/includes/core.php';

  if(!isset($_SESSION["id"])){
?>
<html lang=<?php echo '"'.$site_lang.'"'; ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $page_name; ?></title>
  <meta name="description" content=<?php echo '"'.$site_desc.'"'; ?>>
	<link rel="shortcut icon" href="./assets/img/fanion.png">

  <!-- CSS FILES -->
    <!-- BASICS -->
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <!-- STATIC -->
  <link rel="stylesheet" type="text/css" href="./assets/css/static/index.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/static/footer.css">

  <!-- EXTERNALS CSS FILES -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
  <section id="login">
    <div id="login-panel">
      <?php
        if($use_loglogo) {
      ?>
        <img id="log-icon" src="./assets/img/lsmc.png"/>
      <?php }else{ ?>
        <p class="login-title"><?php echo $site_name; ?></p>
      <?php }; ?>

      <form action="./protocol/connect.php" id="logbox">
        <span class="login-uptext"><?php echo $login[0]; ?>:<br/>
        <input type="text" id="textentry" name="id" placeholder=<?php echo '"'.$login[0].'"'; ?>></span>

        <span class="login-uptext"><?php echo $login[1]; ?>:<br/>
        <input type="password" id="textentry" name="pw" placeholder=<?php echo '"'.$login[1].'"'; ?>></span>

        <input type="submit" value=<?php echo '"'.$login[2].'"'; ?>>
        <?php if($registration) { ?>
          <a id="register" href="./register"><?php echo $login[3]; ?></a>
        <?php }; ?>
      </form>
    </div>
  </section>
  <?php include './assets/includes/static/footer.php'; ?>
  <script type="text/javascript" src="./assets/js/main.js"></script>
</body>
</html>
<?php }else{
  header("Location: ./home");
}; ?>
