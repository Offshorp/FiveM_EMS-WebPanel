<?php
  session_start();
  require './assets/includes/core.php';

  if(isset($_SESSION["id"])){
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
  <link rel="stylesheet" type="text/css" href="./assets/css/static/header.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/static/reports.css">

  <!-- EXTERNALS CSS FILES -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
  <?php include "./assets/includes/static/header.php"; ?>
  <section id="reports">
    Test
  </section>
  <script type="text/javascript" src="./assets/js/main.js"></script>
</body>
</html>
<?php }else{
  header("Location: ./");
}; ?>
