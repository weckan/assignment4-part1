<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/plain');

session_start();
if(isset($_GET['action']) && $_GET['action'] == 'end'){
	$_SESSION = array();
	session_destroy();
	$filePath = explode('/', $_SERVER['PHP_SELF'], -1);
	$filePath = implode('/',$filePath);
	$redirect = "http://" . $_SERVER['HTTP_HOST'] . $filePath;
	header("Location: {$redirect}/Logout.html", true);
	die();
}

if(session_status() == PHP_SESSION_ACTIVE){
	if(isset($_GET['name'])){
		$_SESSION['name'] = $_GET['name'];
	}

	if(!isset($_SESSION['visits'])){
		$_SESSION['visits'] = 0;
	}

	$_SESSION['visits']++;
	echo "Hi $_SESSION[name], you have visited this page $_SESSION[visits] times. \n";
}
?>