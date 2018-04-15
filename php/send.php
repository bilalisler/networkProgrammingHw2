<?php
    date_default_timezone_set('europe/istanbul');

    error_reporting(0);
	session_start();
	$name = $_POST['name'];
	$message = $_POST['message'];
	$dateTime = '<br><span>'.date('d M Y H:i:s').'<span>';
	$array[] = array('name' => $name, 'message' => $message, 'sesion' => $_SESSION['sesionName'], 'dateTime' => $dateTime);
	echo json_encode($array);
?>