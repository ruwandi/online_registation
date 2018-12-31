<?php 
	session_start();

	$_SESSION = array();

	if(isset($_COOkIE[session_name()])){
		setcookie(session_name(), '', time()-86400,'/');

	}
	session_destroy();
	header('Location: welcom.php');
 ?>