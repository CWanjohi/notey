<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>window.alert('Logged out.')</script>";
header("location:index.php");
?>