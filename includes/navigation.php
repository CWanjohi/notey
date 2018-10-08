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
						<li><a href="upload.php">Custom Design</a></li>
						<li><a href="cart.php">My Cart</a></li>
						<li><a href="checkout.php">Checkout</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>

			<!-- Header Icon -->
			<div class="header-icons">
				<ul class="main_menu nav navbar-right">
					<?php
					if (isset($_SESSION['email'])){
						include"connect.php";
						$email = $_SESSION['email'];
						$sql= "SELECT * FROM users WHERE email= '$email'";
						$result = mysqli_query($db,$sql);
						while ($row = mysqli_fetch_array($result)){
							echo "<li><a href=''><span class='glyphicon glyphicon-user'></span>".$row['email'];
							echo "<img src='images/icons/icon-header-01.png' class='header-icon1' alt='icon'>";
						};
						echo "</a></li>";
						echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout </a></li>";
					}else{
						echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span>Login </a></li>";
						echo "<li><a href='register.php'><span class='glyphicon glyphicon-log-in'></span>Sign Up </a></li>";
					}
					?>
				</ul>
							
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