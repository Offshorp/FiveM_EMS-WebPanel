<?php
	try{
		$get_db_param = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		$db__conn = new PDO("mysql:host=".$db__info[0].";dbname=".$db__info[3]."","".$db__info[1]."","".$db__info[2]."", $get_db_param);
		$db__conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(Exception $e){
		echo('<style>span#sqlerr{color: #000;position: fixed;top: 0;}</style>');
		echo('<span id="sqlerr">'.$e->getMessage().'</span>');
	}
?>
