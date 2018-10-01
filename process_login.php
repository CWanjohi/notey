<?php
include 'connect.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql ="SELECT * FROM users WHERE email='$email'";
$result=mysqli_query($db, $sql) or die( mysqli_error($db) );
$count = mysqli_num_rows($result);

if ($_POST) {//form validation
    //check if user exists already
    $query=$db->query("SELECT * FROM users WHERE email='$email'");
    $user=mysqli_fetch_assoc($query);
    $userCount=mysqli_num_rows($query);
    if ($userCount<1) {
	    $errors[]='User doesn\'t exist.';
	    echo "<script type='text/javascript'>window.alert('User doesn\'t exist..')</script>";
	    echo "<script>window.location.href ='login.php'</script>";
    }
    if (empty($_POST['email']) || empty($_POST['password'])) {
    	$errors[]='Enter email and password!';
    	echo "<script type='text/javascript'>window.alert('Enter email and password!')</script>";
    	echo "<script>window.location.href ='login.php'</script>";
    }
    //validate email
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        $errors[]='Invalid email input';
        echo "<script type='text/javascript'>window.alert('Invalid email input')</script>";
        echo "<script>window.location.href ='login.php'</script>";
    }
    //validate password length
    if (strlen($password)<7) {
        $errors[]='Password must be at least 8 characters.';
        echo "<script type='text/javascript'>window.alert('Password must be at least 8 characters.')</script>";
        echo "<script>window.location.href ='login.php'</script>";
    }
    if (!empty($errors)) {
        echo displayErrors($errors);
    }else{
    	//log in the user
        $row = mysqli_fetch_row($query);
        $email = $row['email'];
        $password = $row['password'];
        $name = $row['firstname'];
        
        session_start();
        $_SESSION['email']=$email;
        $_SESSION['name']=$name;
                
        echo "<script type='text/javascript'>window.alert('Login Successful.')</script>";
        echo "<script>window.location.href ='index.php'</script>";
        $user_id=$user['id'];
        login($user_id);
	}
}
?>
