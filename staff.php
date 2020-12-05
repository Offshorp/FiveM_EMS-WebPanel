<?php
  require './assets/includes/core.php';
  require './assets/includes/lang/jobs.php';

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
  <link rel="stylesheet" type="text/css" href="./assets/css/static/staff.css">

  <!-- EXTERNALS CSS FILES -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
</head>
<body>
  <?php include "./assets/includes/static/header.php"; ?>
  <section id="staff">
    <?php
      $staff_users = $db__conn->prepare("SELECT * FROM users WHERE job = ?");
    ?>
    <div class="box">
      <span class="title"><?php echo $staff[5] ?></span>
      <?php
        $staff_users->execute(array(6));
        if($staff_users->rowCount() > 0) {
          while($staffs = $staff_users->fetch()) {
      ?>
        <div id="view">
					<div class="view">
						<center>
							<div id="logo">
								<img class="logo" src="./assets/img/user.png" />
							</div>
							<div class="name"><?php echo htmlspecialchars($staffs["firstname"].' '.$staffs["lastname"]); ?></div>
              <div class="job"><?php echo htmlspecialchars($jobs[$staffs["job"]]); ?></div>
              <div class="phone"><?php echo htmlspecialchars($staffs["phonenumber"]); ?></div>
            </center>
					</div>
				</div>
      <?php
        }};
        $staff_users->execute(array(5));
        if($staff_users->rowCount() > 0) {
          while($staffs = $staff_users->fetch()) {
      ?>
        <div id="view">
					<div class="view">
						<center>
              <div id="logo">
								<img class="logo" src="./assets/img/user.png" />
							</div>
              <div class="name"><?php echo htmlspecialchars($staffs["firstname"].' '.$staffs["lastname"]); ?></div>
              <div class="job"><?php echo htmlspecialchars($jobs[$staffs["job"]]); ?></div>
              <div class="phone"><?php echo htmlspecialchars($staffs["phonenumber"]); ?></div>
						</center>
					</div>
				</div>
      <?php }};?>
    </div>
    <div class="box">
      <span class="title"><?php echo $staff[4] ?></span>
      <?php
        $staff_users->execute(array(4));
        if($staff_users->rowCount() == 0) {
          echo '<div class="error">'.$staff_error." ".$staff[4].'</div>';
        }else{
          while($staffs = $staff_users->fetch()) {
      ?>
        <div id="view">
					<div class="view">
						<center>
              <div id="logo">
								<img class="logo" src="./assets/img/user.png" />
							</div>
							<div class="name"><?php echo htmlspecialchars($staffs["firstname"].' '.$staffs["lastname"]); ?></div>
              <div class="phone"><?php echo htmlspecialchars($staffs["phonenumber"]); ?></div>
            </center>
					</div>
				</div>
      <?php }};?>
    </div>
    <div class="box">
      <span class="title"><?php echo $staff[3] ?></span>
      <?php
        $staff_users->execute(array(3));
        if($staff_users->rowCount() == 0) {
          echo '<div class="error">'.$staff_error." ".$staff[3].'</div>';
        }else{
          while($staffs = $staff_users->fetch()) {
      ?>
        <div id="view">
					<div class="view">
						<center>
              <div id="logo">
								<img class="logo" src="./assets/img/user.png" />
							</div>
              <div class="name"><?php echo htmlspecialchars($staffs["firstname"].' '.$staffs["lastname"]); ?></div>
              <div class="phone"><?php echo htmlspecialchars($staffs["phonenumber"]); ?></div>
            </center>
					</div>
				</div>
      <?php }};?>
    </div>
    <div class="box">
      <span class="title"><?php echo $staff[2] ?></span>
      <?php
        $staff_users->execute(array(2));
        if($staff_users->rowCount() == 0) {
          echo '<div class="error">'.$staff_error." ".$staff[2].'</div>';
        }else{
          while($staffs = $staff_users->fetch()) {
      ?>
        <div id="view">
					<div class="view">
						<center>
              <div id="logo">
								<img class="logo" src="./assets/img/user.png" />
							</div>
              <div class="name"><?php echo htmlspecialchars($staffs["firstname"].' '.$staffs["lastname"]); ?></div>
              <div class="phone"><?php echo htmlspecialchars($staffs["phonenumber"]); ?></div>
            </center>
					</div>
				</div>
      <?php }};?>
    </div>
    <div class="box">
      <span class="title"><?php echo $staff[1] ?></span>
      <?php
        $staff_users->execute(array(1));
        if($staff_users->rowCount() == 0) {
          echo '<div class="error">'.$staff_error." ".$staff[1].'</div>';
        }else{
          while($staffs = $staff_users->fetch()) {
      ?>
        <div id="view">
					<div class="view">
						<center>
              <div id="logo">
								<img class="logo" src="./assets/img/user.png" />
							</div>
              <div class="name"><?php echo htmlspecialchars($staffs["firstname"].' '.$staffs["lastname"]); ?></div>
              <div class="phone"><?php echo htmlspecialchars($staffs["phonenumber"]); ?></div>
            </center>
					</div>
				</div>
      <?php }};?>
    </div>
    <div class="box">
      <span class="title"><?php echo $staff[0] ?></span>
      <?php
        $staff_users->execute(array(0));
        if($staff_users->rowCount() == 0) {
          echo '<div class="error">'.$staff_error." ".$staff[0].'</div>';
        }else{
          while($staffs = $staff_users->fetch()) {
      ?>
        <div id="view">
					<div class="view">
						<center>
              <div id="logo">
								<img class="logo" src="./assets/img/user.png" />
							</div>
              <div class="name"><?php echo htmlspecialchars($staffs["firstname"].' '.$staffs["lastname"]); ?></div>
              <div class="phone"><?php echo htmlspecialchars($staffs["phonenumber"]); ?></div>
            </center>
					</div>
				</div>
      <?php }};?>
    </div>
  </section>
  <script type="text/javascript" src="./assets/js/main.js"></script>
</body>
</html>
<?php }else{
  header("Location: ./");
}; ?>
