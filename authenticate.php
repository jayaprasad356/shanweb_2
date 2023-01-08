<?php
require_once './config/config.php';
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$email = filter_input(INPUT_POST, 'email');
	$passwd = filter_input(INPUT_POST, 'passwd');
	$remember = filter_input(INPUT_POST, 'remember');

	//echo password_verify('admin', '$2y$10$RnDwpen5c8.gtZLaxHEHDOKWY77t/20A4RRkWBsjlPuu7Wmy0HyBu'); exit;

	//Get DB instance.
	// $db = getDbInstance();

	// $db->where("user_name", $username);

	// $row = $db->get('admin_accounts');
	// $_SESSION['user_logged_in'] = TRUE;
	// $_SESSION['admin_type'] = 'admin';
	// header('Location:index.php');

	if ($email == 'gse@shangrila.gov.un' && $passwd == 'gse@energy') {
		$_SESSION['user_logged_in'] = TRUE;
		$_SESSION['admin_type'] = 'admin';
		header('Location:index.php');


		exit;
	} else {
		$_SESSION['login_failure'] = "Invalid emaile or password";
		header('Location:login.php');
		exit;
	}

}
else {
	die('Method Not allowed');
}