<?php
	include 'core/init.php';
	include 'includes/head.php';
	include 'includes/navigation.php';
?>

<section>
	<div class="main-title text-center">
		<h3>Place Order</h3>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 checkout-table">
				<h5 class="text-center">Cart Totals</h5>
				<div>
					<span>Subtotal: </span><span><?=money(35);?></span>
				</div>
				<div>
					<p>Shipping: <strong>Free</strong> delivery for Nairobi and its environs</p>
					<p><strong><?=money(300);?></strong> for nationwide delivery.</p>
				</div>
				<div>
					<span>Total: </span><span><?=money(30);?></span>
				</div>
				<div>
					<a href="process_order.php" class="btn cart-button"><i class="fa fa-cart-plus"></i> Place Order</a>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include 'includes/footer.php'; ?>