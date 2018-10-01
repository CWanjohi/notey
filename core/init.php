<?php
	$db =mysqli_connect('localhost','root','','notey');
	if (mysqli_connect_errno()) {
		echo "Database connection failed with following errors: ".mysqli_connect_error();
		die();
	}

	session_start();
	require_once $_SERVER['DOCUMENT_ROOT'].'/notey/config.php';
	require_once BASEURL.'helpers/helpers.php';

	$cart_id='';
	if (isset($_COOKIE[CART_COOKIE])) {
		$cart_id=cleaner($_COOKIE[CART_COOKIE]);
	}

	if (isset($_SESSION['SBUser'])) {
		$user_id=$_SESSION['SBUser'];
		$query=$db->query("SELECT * FROM users WHERE id ='$user_id'");
		$userData= mysqli_fetch_assoc($query);
		$first_name=$userData['first_name'];
	}

	if (isset($_SESSION['successFlash'])) {
		echo '<div class="bg-success"><p class="text-success text-center">'.$_SESSION['successFlash'].'</p></div>';
		unset($_SESSION['successFlash']);
	}
	if (isset($_SESSION['errorFlash'])) {
		echo '<div class="bg-danger"><p class="text-danger text-center">'.$_SESSION['errorFlash'].'</p></div>';
		unset($_SESSION['errorFlash']);
	}

?>