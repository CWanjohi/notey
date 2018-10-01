<?php
	include 'core/init.php';
	include 'includes/head.php';
	include 'includes/navigation.php';
?>

<section>
	<div class="main-title text-center">
		<h3>The Shop</h3>
	</div>

	<div class="container">
		<div class="row">
			<?php for ($i=1; $i < 8; $i++) :?>
				<div class="col-md-3">
					<div class="product-display">
						<img src="images/products/notebooks/notebook1.jpg" alt="img-product">
						<div>
							<button class="add-cart-btn">
								<a href="process/process_cart.php">Add to Cart</a>
							</button>
						</div>
					</div>

					<div class="">
						<a href="process/process_seeDetails.php">
							Notebook 1 	
						</a>
					</div>
					<div>
						<span class="">
							<?=money(500);?> <del><?=money(600);?></del>
						</span>
					</div>
				</div>
			<?php endfor;?>
		</div>
	</div>
	
</section>

<?php include 'includes/footer.php'; ?>