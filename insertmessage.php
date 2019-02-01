<?php 
	session_start();
	include_once 'classes.php';
	if(isset($POST['chatText'])){
		$chat = new chat();
		$chat->setchatuserid($_SESSION['userid']);
		$chat->setchatText($_POST['chatText']);
		$chat->insertmessage();

	}

?>