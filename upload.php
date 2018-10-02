<?php
	include 'core/init.php';
	include 'includes/head.php';
	include 'includes/navigation.php';
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h2 class="maint-title text-center">Upload Custom Print</h2>
				<hr>
				<form class="form-horizontal" id="login-form" role="form" method="post" action="process_upload.php" enctype="multipart/form-data">
					<div class="form-group">
						<label class="control-label col-md-4" for="upload">File: </label>
						<div class="col-md-6">
							<input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
						</div>
					</div>

					<div class="form-group">
	          <label class="control-label col-md-4" for="email">Email: </label>
	          <div class="col-md-6">
	            <input type="text" class="form-control" name="email" id="email" placeholder="Your Email">
	          </div>
					</div>

					<button type="submit" class="btn cart-button" value="Upload Image" name="submit">Upload</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include 'includes/footer.php'; ?>