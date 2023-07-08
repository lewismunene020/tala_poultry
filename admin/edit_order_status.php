<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    include("includes/db.php");
    if (!isset($_SESSION['admin_email'])) {
        echo "<script>window.open('login.php','_self')</script>";
    }
    else{

?>
<?php
	if (isset($_GET['edit_order_status'])) {
		$order_id = $_GET['edit_order_status'];
        $order_status = $_GET['status'];
		$edit_order = "update customer_orders set order_status='$order_status' where order_id='$order_id'";
		$run_edit = mysqli_query($con,$edit_order);
		if ($run_edit) {
			echo "<script>alert('Order Status Edited')</script>";
			echo "<script>window.open('index.php?view_orders','_self')</script>";
		}
	}
?>
<?php } ?>