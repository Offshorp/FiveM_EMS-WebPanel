<?php
  require "../assets/includes/config.php";
  require '../assets/includes/mysql.php';

  $reg_id = htmlspecialchars($_GET['id']);
  $reg_pw = sha1($_GET['pw']);
  $reg_ln = htmlspecialchars($_GET['ln']);
  $reg_fn = htmlspecialchars($_GET['fn']);
  $reg_num = htmlspecialchars($_GET['num']);

  if(!empty($_GET['id']) AND !empty($_GET['pw']) AND !empty($_GET['ln']) AND !empty($_GET['fn']) AND !empty($_GET['num'])) {
    $regid = $db__conn->prepare("SELECT * FROM users WHERE username = ?");
    $regid->execute(array($reg_id));
    $idexist = $regid->rowCount();

    if($idexist == 0){
      $db_insert = $db__conn->prepare("INSERT INTO users(username, password, lastname, firstname, phonenumber, job, is_activated, is_admin, is_banned) VALUES(?,?,?,?,?,?,?,?,?)");
      if($admin_validation){
        $db_insert->execute(array($reg_id, $reg_pw, $reg_ln, $reg_fn, $reg_num, 0, 0, 0, 0));
      }else{
        $db_insert->execute(array($reg_id, $reg_pw, $reg_ln, $reg_fn, $reg_num, 0, 1, 0, 0));
      };
      header('Location: ../');
    }else{
      echo "Error: This username is already used";
    };
  };
?>
