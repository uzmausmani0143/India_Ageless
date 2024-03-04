
<?php 
session_start();
error_reporting(0);
include "connection.php";

if($_GET['product_id']){
    $pd_id = $_GET['product_id'];

    $s1 = "DELETE from wishlist_products where product_id='$pd_id' ";

    $res1 = mysqli_query($conn,$s1);

    if($res1){
        $_SESSION['message']= " <script> alert('Removed from Wishlist') </script>";
        header("location: wishlist.php");
    }

}

?>



    <?php include "home_header.php"; ?>
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li class="active">Wishlist</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!--Wishlist Area Strat-->
            <div class="wishlist-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="#">
                                <div class="table-content table-responsive">
                                    <!-- <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">remove</th>
                                                <th class="li-product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="li-product-price">Unit Price</th>
                                                <th class="li-product-stock-status">Stock Status</th>
                                                <th class="li-product-add-cart">add to cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="li-product-remove"><a href="#"><i class="fa-solid fa-xmark"></i></a></td>
                                                <td class="li-product-thumbnail"><a href="#"><img src="images/wishlist-thumb/1.jpg" alt=""></a></td>
                                                <td class="li-product-name"><a href="#">Giro Civilia</a></td>
                                                <td class="li-product-price"><span class="amount">$23.39</span></td>
                                                <td class="li-product-stock-status"><span class="in-stock">in stock</span></td>
                                                <td class="li-product-add-cart"><a href="#">add to cart</a></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table> -->



                                    <?php

                                    include "connection.php";
                                    
                                    $sql = "SELECT * FROM wishlist_products";
                                    $result = $conn->query($sql);

                                    ?>

                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="li-product-remove">remove</th>
                                                <!-- <th class="li-product-thumbnail">images</th> -->
                                                <th class="cart-product-name">Product</th>
                                                <th class="li-product-price">Product Price</th>
                                                <th class="li-product-stock-status">Stock Status</th>
                                                <th class="li-product-add-cart">add to cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            // Loop through the fetched data and populate the table rows
                                            while ($row = $result->fetch_assoc()) {
                                                echo "<tr>";
                                                echo "<td class='li-product-remove'><a href='wishlist.php?product_id={$row['product_id']}'><i class='fa-solid fa-xmark'></i></a></td>";
                                                echo "<td class='li-product-name'><a href='$row[product_name].php'>" . $row['product_name'] . "</a></td>";
                                                echo "<td class='li-product-price'><span class='amount'>$" . $row['product_price'] . "</span></td>";
                                                echo "<td class='li-product-stock-status'><span class='in-stock'>in stock</span></td>";
                                                echo "<td class='li-product-add-cart'><a href='shopping-cart.php?product_id={$row['product_id']}'>add to cart</a></td>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                    </table>













                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--Wishlist Area End-->
            <!-- Begin Footer Area -->
            <div class="footer">
                <!-- Begin Footer Static Top Area -->
                <div class="footer-static-top">
                    <div class="container">
                        <!-- Begin Footer Shipping Area -->
                        <div class="footer-shipping pt-60 pb-25">
                            <div class="row">
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/1.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Free Delivery</h2>
                                            <p>And free returns. See checkout for delivery dates.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-sm-55 pb-xs-55">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/2.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Safe Payment</h2>
                                            <p>Pay with the world's most popular and secure payment methods.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/3.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>Shop with Confidence</h2>
                                            <p>Our Buyer Protection covers your purchasefrom click to delivery.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                                <!-- Begin Li's Shipping Inner Box Area -->
                                <div class="col-lg-3 col-md-6 col-sm-6 pb-xs-30">
                                    <div class="li-shipping-inner-box">
                                        <div class="shipping-icon">
                                            <img src="images/shipping-icon/4.png" alt="Shipping Icon">
                                        </div>
                                        <div class="shipping-text">
                                            <h2>24/7 Help Center</h2>
                                            <p>Have a question? Call a Specialist or chat online.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Li's Shipping Inner Box Area End Here -->
                            </div>
                        </div>
                        <!-- Footer Shipping Area End Here -->
                    </div>
                </div>
                <!-- Footer Static Top Area End Here -->

    
        <?php include "home_footer.php"; ?>
