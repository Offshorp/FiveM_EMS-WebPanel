<?php
  session_start();
  require './assets/includes/core.php';

  if(!isset($_SESSION["id"])){
?>
<html lang=<?php echo '"'.$site_lang.'"'; ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $page_name; ?></title>
	<link rel="shortcut icon" href="./assets/img/fanion.png">

  <!-- CSS FILES -->
    <!-- BASICS -->
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css">

    <!-- STATIC -->
  <link rel="stylesheet" type="text/css" href="./assets/css/static/register.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/static/footer.css">

  <!-- EXTERNALS CSS FILES -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
  <section id="reg">
    <div id="reg-panel">
      <?php if($use_loglogo) { ?>
      <img id="reg-icon" src="./assets/img/lsmc.png"/>
      <?php }else{ ?>
      <p class="reg-title"><?php echo $site_name; ?></p>
      <?php }; ?>

      <?php if($registration) { ?>
      <form action="./protocol/register.php" id="regbox">
        <span class="reg-uptext"><?php echo $register[0]; ?>:<br/>
        <input type="text" id="textentry" name="id" placeholder=<?php echo '"'.$register[0].'"'; ?>></span>

        <span class="reg-uptext"><?php echo $register[1]; ?>:<br/>
        <input type="password" id="textentry" name="pw" placeholder=<?php echo '"'.$register[1].'"'; ?>></span>

        <span class="reg-uptext"><?php echo $register[2]; ?>:<br/>
        <input type="text" id="textentry" name="ln" placeholder=<?php echo '"'.$register[2].'"'; ?>></span>

        <span class="reg-uptext"><?php echo $register[3]; ?>:<br/>
        <input type="text" id="textentry" name="fn" placeholder=<?php echo '"'.$register[3].'"'; ?>></span>

        <span class="reg-uptext"><?php echo $register[4]; ?>:<br/>
        <input type="text" id="textentry" name="num" placeholder=<?php echo '"'.$register[4].'"'; ?>></span>

        <input type="submit" value=<?php echo '"'.$register[5].'"'; ?>>
      </form>
      <?php } else { ?>
      <span class="no-register"><?php echo $no_register[0].'<br/><br/><br/>'.$no_register[1].'<br/><br/><br/>'.$no_register[2]; ?></span>
      <?php }; ?>
      <a id="return" href="./">< <?php echo $register[6]; ?></a>
    </div>
  </section>
  <?php include './assets/includes/static/footer.php'; ?>
  <script type="text/javascript" src="./assets/js/main.js"></script>
</body>
</html>
<?php }else{
  header("Location: ./home");
}; ?>
