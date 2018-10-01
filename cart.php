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
					<?php for ($i=0; $i < 4; $i++) :?>
						<tr>
							<td>
								<div class="cart-img-product">
									<img src="images/products/notebooks/notebook1.jpg" alt="img-product">
								</div>
							</td>
							<td><a href="process/process_seeDetails.php">Notebook 1</a></td>
							<td><?=money(35);?></td>
							<td>
								<div class="flex-w bo5 w-size17">
									<input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">
								</div>
							</td>
							<td><?=money(35);?></td>
							<td id="cart-table-btn-column">
								<a href="cart.php" class="btn cart-button cart-table-buttons"><i class="fa fa-pencil"></i></a>
								<a href="#" class="btn cart-button cart-table-buttons"><i class="fa fa-remove"></i></a>
							</td>
						</tr>
					<?php endfor;?>
					</tbody>
				</table>
			</div>
			<div class="col-md-12">
				<div class="col-md-6">
					<a href="product.php" class="btn cart-button"><i class="fa fa-cart-plus"></i> Add Items</a>
					<a href="checkout.php" class="btn cart-button"><i class="fa fa-shopping-cart"></i> Checkout</a>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include 'includes/footer.php'; ?>