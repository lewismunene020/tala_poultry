<?php
$active = 'Home';
include("includes/header.php");
?>

<div id="content">
	<!-- #content Begin -->
	<div class="container">
		<!-- container Begin -->
		<div class="col-md-12">
			<!-- col-md-12 Begin -->

			<ul class="breadcrumb">
				<!-- breadcrumb Begin -->
				<li>
					<a href="index.php">Home</a>
				</li>
				<li>
					Login
				</li>
			</ul><!-- breadcrumb Finish -->

		</div><!-- col-md-12 Finish -->

		<div class="col-md-3">
			<!-- col-md-3 Begin -->

			<?php
			include("includes/sidebar.php");
			?>

		</div><!-- col-md-3 Finish -->

		<div class="col-md-9">
			<!-- col-md-9 Begin -->

			<div class="box">
				<!-- box begin -->
				<div class="box-header">
					<!-- box-header begin -->
					<center>
						<h1>Login</h1>
						<p class="text-muted">
							Login if you already have an account
						</p>
					</center>
					<form action="customer_login.php" method="post">
						<div class="form-group">
							<!-- form-group begin -->
							<label>E-mail:</label>
							<input name="c_email" type="text" class="form-control" required>
						</div><!-- form-group finish -->
						<div class="form-group">
							<!-- form-group begin -->
							<label>Password:</label>
							<input name="c_pass" type="password" class="form-control" required>
						</div><!-- form-group finish -->
						<div class="text-center">
							<!-- text-center begin -->
							<button class="btn btn-primary" name="login" value="login">
								<i class="fa fa-sign-in"></i> Login
							</button>
						</div><!-- text-center finish -->
					</form>
					<center>
						<a href="customer_register.php">
							<h3>Don't have account? Register here</h3>
						</a>
					</center>
				</div><!-- box-header finish -->
			</div><!-- box finish -->
			<?php
			if (isset($_POST['login'])) {
				$customer_email = $_POST['c_email'];
				$customer_pass = $_POST['c_pass'];
				$select_customer = "select * from customers where customer_email='$customer_email' AND customer_pass='$customer_pass'";
				$run_customer = mysqli_query($con, $select_customer);
				$check_customer = mysqli_num_rows($run_customer);
				
				if ($check_customer == 0) {
					echo "<script>alert('Your email or password is wrong')</script>";
					exit();
				}
				if ($check_customer == 1) {
					$_SESSION['customer_email'] = $customer_email;
					echo "<script>window.open('index.php','_self')</script>";
				}
			}
			?>

		</div><!-- col-md-9 Finish -->

	</div><!-- container Finish -->

</div><!-- #content Finish -->

<?php

include("includes/footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>

</html>