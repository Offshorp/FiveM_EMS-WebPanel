<?php
  $page_name = "";
  if($server_name == "") {
    $page_name = $site_name;
  }else{
    $page_name = $site_name.' • '.$server_name;
  };

  if(isset($_SESSION["id"])){
  	$userbanned = $db__conn->prepare("SELECT * FROM users WHERE id = ?");
  	$userbanned->execute(array($_SESSION["id"]));
  	$banuser = $userbanned->fetch();
  	if($banuser["is_banned"] == 1){
  		session_destroy();
  		header("Location: ./");
  		exit();
  	};
  };
?>
