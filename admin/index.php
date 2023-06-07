<?php

session_start();
include("includes/db.php");
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

    $admin_session = $_SESSION['admin_email'];
    $get_admin = "select * from admins where admin_email='$admin_session'";
    $run_admin = mysqli_query($con, $get_admin);
    $row_admin = mysqli_fetch_array($run_admin);
    $admin_id = $row_admin['admin_id'];
    $admin_name = $row_admin['admin_name'];
    $admin_email = $row_admin['admin_email']; 

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>eCom Store Admin Panel</title>
        <link rel="stylesheet" href="css/bootstrap-337.min.css">
        <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>

    <body>

        <div id="wrapper">
            <!-- #wrapper begin -->

            <?php include("includes/sidebar.php"); ?>

            <div id="page-wrapper">
                <!-- #page-wrapper begin -->
                <div class="container-fluid">
                    <!-- container-fluid begin -->

                    <?php

                    if (isset($_GET['insert_product'])) {
                        include("insert_product.php");
                    }

                    if (isset($_GET['view_products'])) {
                        include("view_products.php");
                    }

                    if (isset($_GET['delete_product'])) {
                        include("delete_product.php");
                    }

                    if (isset($_GET['edit_product'])) {
                        include("edit_product.php");
                    }

                    ?>

                </div><!-- container-fluid finish -->
            </div><!-- #page-wrapper finish -->
        </div><!-- wrapper finish -->

        <script src="js/jquery-331.min.js"></script>
        <script src="js/bootstrap-337.min.js"></script>
    </body>

    </html>
<?php } ?>