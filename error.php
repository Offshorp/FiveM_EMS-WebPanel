<?php
  require './assets/includes/core.php';
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
  <link rel="stylesheet" type="text/css" href="./assets/css/static/error.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/static/footer.css">

  <!-- EXTERNALS CSS FILES -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
  <section id="error">
    <p class="err-title"><?php echo $error[0].'<br/>'.$error[1]; ?></p>
  </section>
  <?php include './assets/includes/static/footer.php'; ?>
  <script type="text/javascript" src="./assets/js/main.js"></script>
</body>
</html>
