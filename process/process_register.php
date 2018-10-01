<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/notey/core/init.php';
extract($_POST);
include "connect.php";

if (mysqli_connect_errno()){
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$errors = array(); 

// REGISTER USER
if (isset($_POST['register'])) {
  // receive all input values from the form
  $firstname = mysqli_real_escape_string($db, $_POST['firstname']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $confirm = mysqli_real_escape_string($db, $_POST['confirm']);

  // form validation: ensure that the form is correctly filled by adding 'array_push()' corresponding error onto $errors array
  if (empty($firstname) || empty($lastname)) { array_push($errors, "Both names are required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
	//validate email
	if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	  $errors[]='Invalid email input';
	}
	//validate password length
	if (strlen($password)<7) {
	  $errors[]='Password must be at least 8 characters.';
	}
  if ($password != $confirm) {array_push($errors, "The two passwords do not match"); }

  // first check the database to make sure a user does not already exist with the same email
  $user_check =$db->query("SELECT * FROM users WHERE email='$email' LIMIT 1");
  $user = mysqli_fetch_assoc($user_check);
  
  if ($user) { // if user exists
    if ($user['email'] === $email) {
      array_push($errors, "This email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = password_hash($password,PASSWORD_DEFAULT);//encrypt the password before saving in the database
  	$query = $db->query("INSERT INTO users (first_name, last_name, email, password) VALUES('$firstname', '$lastname', '$email', '$password')");
  	mysqli_query($db, $query);
  	$_SESSION['firstname'] = $firstname;
  	$_SESSION['successFlash'] = "You are now logged in";
  	header('location: index.php');
  }
}