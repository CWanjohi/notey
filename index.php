<?php
	include 'core/init.php';
	include 'includes/head.php';
	include 'includes/navigation.php';
?>
		<!--Splash page(about)-->
		<section class="landing-page">
			
		</section>

		<!--featured products-->
		<section class="featured">	
			<div class="main-title text-center">
				<h3>Featured Products</h3>
			</div>

			<div class="container">
				<div class="row">
					<?php
						include "connect.php";
						$sql = "SELECT * FROM `products` where featured = 'y'";
						$result = mysqli_query($db,$sql);
 						while ($row = mysqli_fetch_array($result)) :?>
							<div class="col-md-3">
							<div class="product-display">
								<img src="images/products/<?=$row['image'];?>" alt="product-img">
								<div>
									<p><?=$row["title"];?></p>
									<button class="add-cart-btn">
										<a href="process_cart.php?id='<?=$row['id'];?>'">Add to Cart</a>
									</button>
								</div>
							</div>

							<div>
								<a href="process_seeDetails.php?id='<?=$row['id'];?>'">See Details</a>
							</div>
							<div>
								<span><?=money($row["list_price"]);?> <del><?=money($row["unit_price"]);?></del></span>
							</div>
						</div>
						<?php endwhile;?>
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