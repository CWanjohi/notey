<?php
	include 'core/init.php';
	include 'includes/head.php';
	include 'includes/navigation.php';
?>

	<section>
		<div class="main-title text-center">
			<h3>Contact Us</h3>
		</div>		

		<div class="container">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<h4 class="m-text26 p-b-36 p-t-15">
						Send us your message
					</h4>

					<form class="form-horizontal" method="post" role="form" action="process_contact.php">
						<div class="form-group">
							<label class="control-label">Your Name:* </label>
							<input type="text" name="name" placeholder="Full Name" required="">
						</div>
						<div class="form-group">
							<label class="control-label">Email:* </label>
							<input type="text" name="email" placeholder="Email Address" required="">
						</div>

						<textarea class="dis-block" rows="4" cols="50" name="feedback" placeholder="Message"></textarea>

						<div class="form-group">
							<button type="submit" name="login" class="btn btn-default">Send</button>
						</div>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</section>

<?php include 'includes/footer.php'; ?>