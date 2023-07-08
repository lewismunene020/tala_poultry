<div id="footer">
	<!-- #footer Begin -->

	<div class="container">
		<!-- container Begin -->

		<div class="row">
			<!-- row Begin -->

			<div class="col-sm-6 col-md-3">
				<!-- col-sm-6 col-md-3 Begin -->

				<h4>Pages</h4>

				<ul>
					<li><a href="contact.php">Contact Us</a></li>
					<li><a href="shop.php">Shop</a></li>
					<li>
						<?php
						if (!isset($_SESSION['customer_email'])) {
							echo "<a href='customer_login.php'>Login</a>";
						} else {
							echo "<a href='logout.php'>Logout</a>";
						}
						?>
					</li>
				</ul>

				<hr>

				<h4>User Section</h4>

				<ul>
					<li>
						<?php
						if (!isset($_SESSION['customer_email'])) {
							echo "<a href='checkout.php'>Login</a>";
						} else {
							echo "<a href='logout.php'>Logout</a>";
						}
						?>
					</li>
					<li><a href="customer_register.php">Register</a></li>
				</ul>

				<hr class="hidden-md hidden-lg hidden-sm">

			</div><!-- col-sm-6 col-md-3 Finish -->

			<div class="col-sm-6 col-md-3">
				<!-- col-sm-6 col-md-3 Begin -->

				<h4>Top Product Categories</h4>

				<ul>
					<?php

					$get_p_cats = "select * from product_categories";
					$run_p_cats = mysqli_query($con, $get_p_cats);
					while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

						$p_cat_id = $row_p_cats['p_cat_id'];
						$p_cat_title = $row_p_cats['p_cat_title'];

						echo "
								<li>
								<a href='shop.php?p_cat=$p_cat_id'>
								$p_cat_title
								</a>
								</li>
							";
					}

					?>
				</ul>

				<hr class="hidden-md hidden-lg">

			</div><!-- col-sm-6 col-md-3 Finish -->

			<div class="col-sm-6 col-md-3">
				<!-- col-sm-6 col-md-3 Begin -->

				<h4>Find Us:</h4>

				<p>
					<strong>Tala Poultry Farmers</strong>
					<br />Kenyatta Road,
					<br />Juja,
					<br />Kiambu,
					<br />Kenya.
				</p>

				<a href="contact.php">Contact Page</a>

				<hr class="hidden-md hidden-lg">

			</div><!-- col-sm-6 col-md-3 Finish -->

			<div class="col-sm-6 col-md-3">
				<!-- col-sm-6 col-md-3 Begin -->

				<h4>Keep In Touch</h4>

				<p class="social">

					<a href="#" class="fa fa-facebook"></a>
					<a href="#" class="fa fa-twitter"></a>
					<a href="#" class="fa fa-instagram"></a>
					<a href="#" class="fa fa-envelope"></a>

			</div><!-- col-sm-6 col-md-3 Finish -->

		</div><!-- row Finish -->

	</div><!-- container Finish -->

</div><!-- #footer Finish -->

<div id="copyright">
	<!-- copyright Begin -->

	<div class="container">
		<!-- container Begin -->

		<div class="col-md-6">
			<p class="pull-left">&copy; 2023 Tala Poultry Farmers. All Rights Reserved.</p>
		</div>

	</div><!-- container Begin -->

</div><!-- copyright Finish -->