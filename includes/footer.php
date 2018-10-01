		<!-- Footer -->
		<footer id= "footer">
			<div class="container">
				<div class="row" id="footer-items">
					<div class="text-center col-md-12">
						<h4>Get In Touch</h4>
						<div>
							<small class="s-text7 w-size27">Contact Us on +254 799 999 999</small>
							<div class="flex-m p-t-30">
								<a href="https://www.facebook.com/" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
								<a href="https://www.instagram.com/notey_ke" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
								<a href="https://www.twitter.com/Noteyest" class="fs-18 color1 p-r-20 fa fa-twitter"></a>
								<a href="https://www.pinterest.com/" class="fs-18 color1 p-r-20 fa fa-pinterest-p"></a>
							</div>
						</div>
					</div>
				<!--
					<div class="col-md-5">
						<h4>Categories</h4>
						<ul>
							<li><a href="#" class="s-text7">Notebooks</a></li>
							<li><a href="#" class="s-text7">Mugs</a></li>
							<li><a href="#" class="s-text7">Hoodies</a></li>						
						</ul>
					</div>
				-->
				</div>
			</div>
			<p class="text-center" id="copyright">Notey. | Copyright &copy; 2018 All rights reserved.</p>
		</footer>

		<!-- Back to top -->
		<div class="btn btn-back-to-top" id="myBtn">
			<span class="symbol-btn-back-to-top">
				<i class="fa fa-angle-double-up" aria-hidden="true"></i>
			</span>
		</div>

		<script type="text/javascript">
			function move() {
				var elem = document.getElementById("myBar"); 
				var width = 1;
				var id = setInterval(frame, 10);
				function frame() {
						if (width >= 100) {
								clearInterval(id);
						} else {
								width++; 
								elem.style.width = width + '%'; 
						}
				}
		}
		</script>

	</body>
</html>