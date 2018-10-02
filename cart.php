<?php
	include 'core/init.php';
	include 'includes/head.php';
	include 'includes/navigation.php';
?>

<section>
	<div class="main-title text-center">
		<h3>My Cart</h3>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table-shopping-cart">
					<thead>
						<th></th>
						<th>Product</th>
						<th>Price</th>
						<th id="col-quantity">Quantity</th>
						<th>Total</th>
						<th></th>
					</thead>

					<tbody>
						<?php
						include "connect.php";
						$email = $_SESSION['email'];
						$sql = "SELECT * FROM `cart` WHERE buyer = '$email'";
						$result = mysqli_query($db,$sql);
 						while ($row = mysqli_fetch_array($result)) :?>
						<tr>
							<td>
								<div class="cart-img-product">
									<img src="images/products/<?=$row['image'];?>" alt="img-product">
								</div>
							</td>
							<td><a href="process_seeDetails.php"><?=$row['title'];?></a></td>
							<td><?=money($row['price']);?></td>
							<td>
								<div>
									<input class="text-center" type="number" name="num-product1" value="1">
								</div>
							</td>
							<?php $item_total=($row['price']) * 1;?>
							<td><?=money($item_total);?></td>
							<td id="cart-table-btn-column">
								<a href="cart.php" class="btn cart-button cart-table-buttons"><i class="fa fa-pencil"></i></a>
								<a href="process_delete.php?id='<?=$row['id'];?>'" class="btn cart-button cart-table-buttons"><i class="fa fa-remove"></i></a>
							</td>
						</tr>
					<?php endwhile;?>
				</tbody>
				</table>
			</div>
			<div class="cart-btn-section col-md-6">
				<a href="product.php" class="btn cart-button"><i class="fa fa-cart-plus"></i> Add Items</a>
				<a href="checkout.php" class="btn cart-button"><i class="fa fa-shopping-cart"></i> Checkout</a>
			</div>
		</div>
	</div>
</section>


<?php include 'includes/footer.php'; ?>