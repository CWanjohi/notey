<?php
	include 'core/init.php';
	include 'includes/head.php';
	include 'includes/navigation.php';
?>

		<section class="featured">	
			<div class="main-title text-center">
				<h3>Product Details</h3>
			</div>

			<div class="container">
				<div class="row">
					<?php
						include "connect.php";
						$sql = "SELECT * FROM `products` where id = '$id'";
						$result = mysqli_query($db,$sql);
 						while ($row = mysqli_fetch_array($result)) :?>
							<div class="col-md-3">
							<div class="product-display">
								<img src="../notey/images/products/<?=$row['image'];?>" alt="product-img">
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

<?php include 'includes/footer.php'; ?>