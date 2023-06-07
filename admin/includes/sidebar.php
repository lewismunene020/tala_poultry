<?php

include("includes/db.php");
if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
} else {

?>

    <nav class="navbar navbar-inverse navbar-fixed-top">
        <!-- navbar navbar-inverse navbar-fixed-top begin -->
        <div class="navbar-header">
            <!-- navbar-header begin -->

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <!-- navbar-toggle begin -->

                <span class="sr-only">Toggle Navigation</span>

                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>

            </button><!-- navbar-toggle finish -->

            <a href="index.php?view_products" class="navbar-brand">Admin Area</a>

        </div><!-- navbar-header finish -->

        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <!-- collapse navbar-collapse navbar-ex1-collapse begin -->
            <ul class="nav navbar-nav side-nav">
                <!-- nav navbar-nav side-nav begin -->

                <li>
                    <!-- li begin -->
                    <a href="#" data-toggle="collapse" data-target="#products">
                        <!-- a href begin -->

                        <i class="fa fa-fw fa-tag"></i> Products
                        <i class="fa fa-fw fa-caret-down"></i>

                    </a><!-- a href finish -->

                    <ul id="products" class="collapse">
                        <!-- collapse begin -->
                        <li>
                            <!-- li begin -->
                            <a href="index.php?insert_product"> Insert Product </a>
                        </li><!-- li finish -->
                        <li>
                            <!-- li begin -->
                            <a href="index.php?view_products"> View Products </a>
                        </li><!-- li finish -->
                    </ul><!-- collapse finish -->

                </li><!-- li finish -->

                <li>
                    <!-- li begin -->
                    <a href="logout.php">
                        <!-- a href begin -->
                        <i class="fa fa-fw fa-power-off"></i> Log Out
                    </a><!-- a href finish -->
                </li><!-- li finish -->

            </ul><!-- nav navbar-nav side-nav finish -->
        </div><!-- collapse navbar-collapse navbar-ex1-collapse finish -->

    </nav><!-- navbar navbar-inverse navbar-fixed-top finish -->
<?php } ?>