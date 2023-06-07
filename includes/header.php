 <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    session_start();
    include("includes/db.php");
    include("functions/functions.php");
    ?>

 <?php

    if (isset($_GET['pro_id'])) {
        $product_id = $_GET['pro_id'];
        $get_product = "select * from products where product_id='$product_id'";
        $run_product = mysqli_query($con, $get_product);
        $row_product = mysqli_fetch_array($run_product);
        $p_cat_id = $row_product['p_cat_id'];
        $pro_title = $row_product['product_title'];
        $pro_price = $row_product['product_price'];
        $pro_desc = $row_product['product_desc'];
        $pro_img1 = $row_product['product_img1'];
        $pro_img2 = $row_product['product_img2'];
        $pro_img3 = $row_product['product_img3'];

        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($con, $get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];
    }

    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>eCom Shop</title>
     <link rel="stylesheet" href="styles/bootstrap-337.min.css">
     <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
     <link rel="stylesheet" href="styles/style.css">
 </head>

 <body>

     <div id="top"
         <!-- Top Begin -->

         <div class="container">
             <!-- container Begin -->

             <div class="col-md-6 offer">
                 <!-- col-md-6 offer Begin -->

                 <a href="#" class="btn btn-success btn-sm">
                     <?php
                        if (!isset($_SESSION['customer_email'])) {
                            echo "Welcome: Guest";
                        } else {
                            echo "Welcome: " . $_SESSION['customer_email'] . "";
                        }
                        ?>
                 </a>

             </div><!-- col-md-6 offer Finish -->

             <div class="col-md-6">
                 <!-- col-md-6 Begin -->

                 <ul class="menu">
                     <!-- cmenu Begin -->

                     <li>
                         <a href="customer_register.php">Register</a>
                     </li>

                     <li>
                         <a href="checkout.php">
                             <?php
                                if (!isset($_SESSION['customer_email'])) {
                                    echo "<a href='customer_login.php'>Login</a>";
                                } else {
                                    echo "<a href='logout.php'>LogOut</a>";
                                }
                                ?>
                         </a>
                     </li>

                 </ul><!-- menu Finish -->

             </div><!-- col-md-6 Finish -->

         </div><!-- container Finish -->

     </div><!-- Top Finish -->

     <div id="navbar" class="navbar navbar-default">
         <!-- navbar navbar-default Begin -->

         <div class="container">
             <!-- container Begin -->

             <div class="navbar-header">
                 <!-- navbar-header Begin -->

                 <a href="index.php" class="navbar-brand home">
                     <!-- navbar-brand home Begin -->

                     <img src="images/ecom-store-logo.png" alt="eCom-Store Logo" class="hidden-xs">
                     <img src="images/ecom-store-logo-mobile.png" alt="eCom-Store Logo Mobile" class="visible-xs">

                 </a><!-- navbar-brand home Finish -->

                 <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                     <span class="sr-only">Toggle Navigation</span>

                     <i class="fa fa-align-justify"></i>

                 </button>

             </div><!-- navbar-header Finish -->

             <div class="navbar-collapse collapse" id="navigation">
                 <!-- navbar-collapse collapse Begin -->

                 <div class="padding-nav">
                     <!-- padding-nav Begin -->

                     <ul class="nav navbar-nav left">
                         <!-- nav navbar-nav left Begin -->

                         <li class="<?php if ($active == 'Home') echo 'active'; ?>">
                             <a href="index.php">Home</a>
                         </li>
                         <li class="<?php if ($active == 'Shop') echo 'active'; ?>">
                             <a href="shop.php">Shop</a>
                         </li>
                         <li class="<?php if ($active == 'Contact') echo 'active'; ?>">
                             <a href="contact.php">Contact Us</a>
                         </li>

                     </ul><!-- nav navbar-nav left Finish -->

                 </div><!-- padding-nav Finish -->


             </div><!-- navbar-collapse collapse Finish -->

         </div><!-- container Finish -->

     </div><!-- navbar navbar-default Finish -->