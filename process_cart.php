<?php
session_start();

include "connect.php";
$id = $_GET['id'];

//include "connect.php";

$sql = "SELECT * FROM products WHERE id = '$id'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result);
while ($row){
	$email = $_SESSION['email'];
  $title = $row['title'];
  $image = $row['image'];
  $price = $row['list_price'];

  $sql3 = "INSERT INTO `cart` (`image`, `title`, `price`, `quantity`, `buyer`) VALUES ('$image', '$title', '$price', '1', '$email')";
  $result2 = mysqli_query($db,$sql3);
  echo "<script type='text/javascript'>window.alert('Product has been added to your cart successfully')</script>";
  echo "<script>window.location.href ='cart.php'</script>";
}
?>