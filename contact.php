<?php
	include 'core/init.php';
	include 'includes/head.php';
	include 'includes/navigation.php';
?>

	<section>
		<div class="main-title text-center">
			<h3>Contact Us</h3>
		</div>		

		<div class="col-md-offset-3 col-md-6">
			<h4 class="m-text26 p-b-36 p-t-15">
				Send us your message
			</h4>

			<form class="leave-comment">
				<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name">
				</div>

				<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Phone Number">
				</div>

				<div class="bo4 of-hidden size15 m-b-20">
					<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
				</div>

				<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>

				<div class="w-size25">
					<!-- Button -->
					<button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
						Send
					</button>
				</div>
			</form>
		</div>
		<div class="col-md-3"></div>
	</section>

<?php include 'includes/footer.php'; ?>