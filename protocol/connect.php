<?php
  session_start();

  require "../assets/includes/config.php";
  require '../assets/includes/mysql.php';

  $log_id = htmlspecialchars($_GET['id']);
  $log_pw = sha1($_GET['pw']);

  if(!empty($_GET['id']) AND !empty($_GET['pw'])) {
    $loguser = $db__conn->prepare("SELECT * FROM users WHERE username = ? AND password = ?");
    $loguser->execute(array($log_id, $log_pw));
    $userexist = $loguser->rowCount();

    if($userexist == 1){
      $userinfo = $loguser->fetch();
      $_SESSION['id'] = $userinfo['id'];
      $_SESSION['user'] = $userinfo['username'];

      header('Location: ../home');
    }else{
      echo "This account don't exist";
    };
  };
?>
