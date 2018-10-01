<?php
	include 'core/init.php';
	include 'includes/head.php';
	include 'includes/navigation.php';
?>
		<!--Splash page(about)-->
		<section class="landing-page">
			<p>CCccccffguugi</p>
		</section>

		<!--featured products-->
		<section class="featured">	
			<div class="main-title text-center">
				<h3>Featured Products</h3>
			</div>

			<div class="container">
				<div class="row">
					<?php for ($i=0; $i < 8; $i++) :?>
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
								<a href="process/process_seeDetails.php" class="">Notebook 1</a>
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

			<!-- Shipping -->
		<section class="shipping">
			<div class="container-fluid">
				<div class="row text-center">
					<div class="col-md-4">
						<h4 class="">Free Delivery within the city</h4>
						<p><small><strong><?=money(300);?></strong> for nationwide delivery.</small></p>
						<span class="colseparator"></span>
					</div>
					<div class="col-md-4">
						<h4 class="">7 Days Return</h4>
						<p><small>Simply return it within <strong>7</strong> days for an exchange.</small></p>
						<span class="colseparator"></span>
					</div>
					<div class="col-md-4">
						<h4 class="">Store Opening</h4>
						<p><small>Shop open from <strong>Monday</strong> to <strong>Sunday</strong></small></p>
					</div>
				</div>
			</div>
		</section>

<?php include 'includes/footer.php'; ?>