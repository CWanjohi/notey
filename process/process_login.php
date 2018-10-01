<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/notey/core/init.php';
include "connect.php";
//include 'includes/head.php';
extract($_POST);
 
$email=((isset($_POST['email']))?cleaner($_POST['email']):'');
$email= trim($email);
$password=((isset($_POST['password']))?cleaner($_POST['password']):'');
$password=trim($password);
$errors=array();

if ($_POST) {
	//form validation
	if (empty($_POST['email']) || empty($_POST['password'])) {
		$errors[]='Enter email and password!';
	}
	//validate email
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	  $errors[]='Invalid email input';
	}
	//validate password length
	if (strlen($password)<7) {
	  $errors[]='Password must be at least 8 characters.';
	}
	//check if user exists already
	$sql="SELECT * FROM users WHERE email='$email'";
	$query=$db->query($sql) or die( mysqli_error($db) );
	$user=mysqli_fetch_assoc($query);
	$userCount=mysqli_num_rows($query);
	
	if ($userCount<1) {
	  $errors[]='User doesn\'t exist.';
	}
	if (!password_verify($password,$user['password'])) {
	  $errors[]='Incorrect password!';
	}
	if (!empty($errors)) {
	  echo displayErrors($errors);
	}else{
	  //log in the user
	  $user_id=$user['id'];
	  login($user_id);
	}
}
?>