		<!--top navbar-->
		<div class="wrap_header">
			<!-- Logo -->
			<a href="index.php" class="logo">
				<img src="images/icons/logo.png" alt="img-logo">
			</a>
			<!-- Menu -->
			<div>
				<nav class="menu">
					<ul class="main_menu">
						<li><a href="index.php">Home</a></li>
						<li><a href="product.php">Shop</a></li>
						<li><a href="upload.php">My Design</a></li>
						<li><a href="cart.php">My Cart</a></li>
						<li><a href="checkout.php">Checkout</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>

			<!-- Header Icon -->
			<div class="header-icons">
				<span class="topbar-email">user@example.com</span>
				<img src="images/icons/icon-header-01.png" class="header-icon1" alt="icon">
				<span class="linedivide1"></span>

				<div class="header-wrapicon2">
					<!-- Header cart noti -->
					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">0</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/products/notebook1.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											White Shirt With Pleat Detail Back
										</a>

										<span class="header-cart-item-info">
											1 x <?=money(15);?>
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/products/notebook1.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Converse All Star Hi Black Canvas
										</a>

										<span class="header-cart-item-info">
											1 x <?=money(35);?>
										</span>
									</div>
								</li>

								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/products/notebook1.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											Nixon Porter Leather Watch In Tan
										</a>

										<span class="header-cart-item-info">
											1 x <?=money(15);?>
										</span>
									</div>
								</li>
							</ul>

							<div class="header-cart-total">
								Total: $75.00
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn"><a href="cart.php">View Cart</a></div>
								<div class="header-cart-wrapbtn"><a href="checkout.php">Check Out</a></div>
							</div>
						</div>
					</div><!--header cart noti-->
				</div>
			</div>
		</div>