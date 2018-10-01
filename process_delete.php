//DELETE FROM `cart` WHERE `cart`.`id` = 1
<?php
include "connect.php";

$id = $_GET['id'];
$sql = "DELETE FROM `cart` WHERE `cart`.`id` = '$id'";
mysqli_query($db, $sql);

echo "<script type='text/javascript'>window.alert('Item deleted successfully.')</script>";
echo "<script>window.location.href ='cart.php'</script>";

//$quantity= $_POST['quantity'];
//$id= $_POST['id'];
//
//$sql2 = "UPDATE `cart` SET `quantity` = '1' WHERE `cart`.`id` = 17;";
//
//$sql = "UPDATE `cart` SET `quantity` = '$quantity' WHERE `cart`.`id` = '$id'";
//
////$sql = "INSERT INTO `products` (`id`, `category`, `title`, `description`, `image`, `namee`, `phone`, `poster`) VALUES (NULL, '$ctg', '$title', '$description', '$image', '$price','$phone','$usr1')";
//
//mysqli_query($db, $sql);
//
//echo "<script type='text/javascript'>window.alert('Update was successful')</script>";
//    echo "<script>window.location.href ='cart.php'</script>";
//
//                                            extract($_POST);
//                                            include "connect.php";
//                                            $id = $_GET['id'];
////                                            include "connect.php";
//                                            $sql = "SELECT * FROM products WHERE id = '$id'";
//                                            $result = mysqli_query($db,$sql);
//
//                                            $HEHE = $row['title'];
//                                            echo $HEHE;
//
//                                            while ($row = mysqli_fetch_array($result))
//                                            {
//                                                echo $row['price'];
//
//                                                $HEHE = $row['title'];
//                                                $sql2 = "INSERT INTO `cart` (`id`, `image`, `title`, `price`, `quantity`) VALUES (NULL, '$HEHE', '$HEHE', '234', '23')";
//                                                $result2 = mysqli_query($db,$sql2);
//                                            }
//                                            ?>