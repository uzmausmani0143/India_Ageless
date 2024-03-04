
                <?php
                include "connection.php";
                    session_start();

                     if(isset($_SESSION['users_id'])) {
                                   
                    $firstName = $_SESSION['firstname'];
                    } else {
                                    
                    $firstName = "Guest";
                    }
                ?>


<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- index-431:41-->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home || India Ageless</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
        <!-- Material Design Iconic Font-V2.2.0 -->
        <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Font Awesome Stars-->
        <link rel="stylesheet" href="css/fontawesome-stars.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="css/meanmenu.css">
      
        <!-- Slick Carousel CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Jquery-ui CSS -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- Venobox CSS -->
        <link rel="stylesheet" href="css/venobox.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/nice-select.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- Bootstrap V4.1.3 Fremwork CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Helper CSS -->
        <link rel="stylesheet" href="css/helper.css">
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Modernizr js -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>


        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>

        <style>
            /* Marquee */
  marquee {
    font-weight: bold;
    color: #e65c00;
    
    font-size: 1.2rem;
  }
  /* Card */
  .card {
    height: 100%;
    background-color: #6f0c87;
    text-align: center;

  }
  .card-title {
    color: #ffff1a;
    margin-bottom: 1rem;
    font-weight: bold;
  }
  .card-text{
    color: white;
  }
  
  .fullcard {
    padding-bottom: 10px !important;
    
    
     
  }
  /* Carousel */
  .carousel{
    border-radius: 30px;
  }
  .carousel-item img {
    height: 450px;
    object-fit:fill;
  }
 
  .carousel-caption {
    background-color: rgba(0, 0, 0, 0.6);
    padding: 20px;
    border-radius: 10px;
    color: #fff;
    
  }
  
  
  .banner {
    background:  rgb(11, 81, 11);
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 2rem 0;
    text-align: center;
  }
  
  .banner h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
  }
  
  .banner p {
    font-size: 1.5rem;
    margin-bottom: 2rem;
  }
  
  .banner .btn {
    font-size: 1.5rem;
  }
 /* Footer */
 footer {
    padding: 50px 0;
  }
  
  footer h4 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 20px;
  }
  
  footer p {
    font-size: 14px;
    line-height: 24px;
    margin-bottom: 20px;
    color: #fff;
  }
  
  footer ul li {
    margin-bottom: 10px;
  }
  
  footer a {
    color: #fff;
    text-decoration: none;
  }
  
  footer a:hover {
    text-decoration: none;
    color: #ffc107;
  }
  
  footer .social-icons {
    margin-top: 20px;
  }
  
  footer .social-icons a {
    display: inline-block;
    color: #fff;
    font-size: 20px;
    margin-right: 10px;
  }
  footer .social-icons a:hover{
  color: #ffc107;
  transition: all 0.4s ease-in-out;
  }
  
  /* Form */
  footer form .form-group {
    margin-bottom: 15px;
  }
  
  footer form input[type="text"],
  footer form input[type="email"],
  footer form textarea {
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #fff;
    color: #fff;
    font-size: 14px;
    margin-bottom: 20px;
    padding: 10px;
  }
  
  footer form input[type="text"]::placeholder,
  footer form input[type="email"]::placeholder,
  footer form textarea::placeholder {
    color: #ccc;
  }
  
  footer form button[type="submit"] {
    background-color: #ffc107;
    border: none;
    color: #fff;
    font-size: 14px;
    font-weight: 600;
    padding: 10px 20px;
    transition: background-color 0.3s ease;
  }
  
  footer form button[type="submit"]:hover {
    background-color: #ee9b1f;
    color: white;
  }
  
  /* Bottom section */
  footer hr {
    border-top: 1px solid #333;
    margin-top: 50px;
    margin-bottom: 30px;
  }
  
  footer .bottom-section p {
    font-size: 14px;
    margin-bottom: 0;
  }
  
  footer .bottom-section a {
    color: #ccc;
    text-decoration: none;
  }
  
  footer .bottom-section a:hover {
    color: #fff;
  }

  /* Google Translate */

    .goog-te-banner-frame.skiptranslate,
    .goog-te-gadget-simple img,
    img.goog-te-gadget-icon,
    .goog-te-menu-value span {
        display: none!important;
    }
        </style>

    </head>
    <body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
        <!-- Begin Body Wrapper -->
        <div class="body-wrapper">
            <!-- Begin Header Area -->
            <header class="li-header-4">
                <!-- Begin Header Top Area -->
                <div class="header-top">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Top Left Area -->
                            <div class="col-lg-3 col-md-4">
                                <div class="header-top-left">
                                    <ul class="phone-wrap">
                                        <li><span>Telephone Enquiry:</span><a href="#">(+123) 123 321 345</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Left Area End Here -->
                            <!-- <div class="col-lg-4 col-md-5">
                                <div class="header-top-right">
                                    <span>Experience India's GI, a heritage that's worth a try!</span>
                                </div>
                            </div> -->
                            <!-- Begin Header Top Right Area -->


                           



                            <div class="col-lg-9 col-md-8">
                                <div class="header-top-right">
                                    <ul class="ht-menu">
                                        <!-- Begin Setting Area -->
                                        <li>
                                            <div class="ht-setting-trigger"><span><?php echo "Welcome, $firstName"; ?></span></div>
                                            <div class="setting ht-setting">
                                                <ul class="ht-setting-list">
                                                <?php if(isset($_SESSION['users_id'])): ?>
                                                    <li><a href="account.php">Account</a></li>
                                                    <li><a href="checkout.php">Checkout</a></li>
                                                    <li><a href="logout.php">Logout</a></li>
                                                <?php else: ?>
                                                    <li><a href="login-register.php">Sign In</a></li>
                                                    <?php endif; ?>
                                                </ul>
                                            </div>
                                        </li>
                                        <!-- Setting Area End Here -->
                                        
                                        <!-- Begin Language Area -->
                                        <li>
                                            <span class="language-selector-wrapper">Language :</span>
                                            <div id="google_translate_element" ></div>
                                            <!-- <div class="ht-language-trigger"><span>English</span></div>
                                            <div class="language ht-language">
                                                <ul class="ht-setting-list">
                                                    <li class="active"><a href="#"><img src="images/menu/flag-icon/1.jpg" alt="">English</a></li>
                                                    <li><a href="#"><img src="images/menu/flag-icon/2.jpg" alt="">Français</a></li>
                                                </ul>
                                            </div> -->
                                            <script>
                                                function googleTranslateElementInit(){
                                                    new google.translate.TranslateElement({
                                                        pageLanguage: 'en',
                                                        
                                                        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                                    },'google_translate_element');
                                                }
                                            </script>
                                            <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                        </li>
                                        <!-- Language Area End Here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- Header Top Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Top Area End Here -->
                <!-- Begin Header Middle Area -->
                <div class="header-middle pl-sm-0 pr-sm-0 pl-xs-0 pr-xs-0">
                    <div class="container">
                        <div class="row">
                            <!-- Begin Header Logo Area -->
                            <div class="col-lg-3">
                                <div class="logo pb-sm-30 pb-xs-30">
                                    <a href="index.php">
                                        <img src="images/menu/logo/icon.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <!-- Header Logo Area End Here -->
                            <!-- Begin Header Middle Right Area -->
                            <div class="col-lg-9 pl-0 ml-sm-15 ml-xs-15">
                                <!-- Begin Header Middle Searchbox Area -->
                                <form action="#" class="hm-searchbox">
                                    <input type="text" placeholder="Enter your search key ...">
                                    <button class="li-btn" type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <!-- Header Middle Searchbox Area End Here -->
                                <!-- Begin Header Middle Right Area -->
                                <div class="header-middle-right">
                                    <ul class="hm-menu">
                                        <!-- Begin Header Middle Wishlist Area -->
                                        <li class="hm-wishlist">
                                            <a href="wishlist.php">
                                                <span class="cart-item-count wishlist-item-count">0</span>
                                                <i class="fa fa-heart-o"></i>
                                            </a>
                                        </li>
                                        <!-- Header Middle Wishlist Area End Here -->
                                        <!-- Begin Header Mini Cart Area -->
                                        <li class="hm-minicart">
                                            <div class="hm-minicart-trigger">
                                                <span class="item-icon"></span>
                                                <span class="item-text">
                                                    <span class="cart-item-count">0</span>
                                                </span>
                                            </div>
                                            <span></span>
                                            <div class="minicart">
                                                <div class="minicart-button">
                                                    <a href="shopping-cart.php" class="li-button li-button-dark li-button-fullwidth li-button-sm">
                                                        <span>View Full Cart</span>
                                                    </a>
                                                    <br>
                                                    <a href="checkout.php" class="li-button li-button-fullwidth li-button-sm">
                                                        <span>Checkout</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- Header Mini Cart Area End Here -->
                                    </ul>
                                </div>
                                <!-- Header Middle Right Area End Here -->
                            </div>
                            <!-- Header Middle Right Area End Here -->
                        </div>
                    </div>
                </div>
                <!-- Header Middle Area End Here -->
                <!-- Begin Header Bottom Area -->
                <div class="header-bottom header-sticky stick d-none d-lg-block d-xl-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                               <!-- Begin Header Bottom Menu Area -->
                               <div class="hb-menu">
                                   <nav>
                                       <ul>
                                           <li class="dropdown-holder">
                                                <a href="index.php">Home</a>
                                           </li>
                                           <li class="megamenu-holder"><a href="#">All States(From A-Z)</a>
                                               <ul class="megamenu hb-megamenu">
                                                   <li><a href="#">A-J States</a>
                                                        <ul>
                                                           
                                                            <li><a href="#">Andhra Pradesh</a></li>
                                                            <li><a href="#">Arunachal Pradesh</a></li>
                                                            <li><a href="#">Assam</a></li>
                                                            <li><a href="#">Bihar</a></li>
                                                            <li><a href="#">Chhattisgarh</a></li>
                                                            <li><a href="#">Goa</a></li>
                                                            <li><a href="#">Gujarat</a></li>
                                                            <li><a href="#">Haryana & Punjab</a></li>
                                                            <li><a href="#">Himachal Pradesh</a></li>
                                                            <li><a href="#">Jammu & Kashmir</a></li>
                                                            
                                                            
                                                        </ul>
                                                   </li>
                                                    <li><a href="#">J-N States</a>
                                                       <ul>
                                                           
                                                           <li><a href="#">Jharkhand</a></li>
                                                            <li><a href="#">Karnataka</a></li>
                                                            <li><a href="#">Kerala</a></li>
                                                            <li><a href="#">Madhya Pradesh</a></li>
                                                            <li><a href="#">Maharashtra</a></li>
                                                            <li><a href="#">Manipur</a></li>
                                                            <li><a href="#">Meghalaya</a></li>
                                                            <li><a href="#">Mizoram</a></li>
                                                            <li><a href="#">Nagaland</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href="#">N-W States</a>
                                                       <ul>
                                                          
                                                           <li><a href="#">Odisha</a></li>
                                                            <li><a href="#">Rajasthan</a></li>
                                                            <li><a href="#">Sikkim</a></li>
                                                            <li><a href="#">Tamil Nadu</a></li>
                                                            <li><a href="#">Telangana</a></li>
                                                            <li><a href="#">Tripura</a></li>
                                                            <li><a href="#">Uttar Pradesh</a></li>
                                                            <li><a href="#">Uttarakhand</a></li>
                                                            <li><a href="#">West Bengal</a></li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>
                                           <li class="dropdown-holder"><a href="#">Grocery</a>
                                               <ul class="hb-dropdown">
                                                    <li><a href="#">Indian Spices</a></li>
                                                    <li><a href="#">Cereals & Pulses</a></li>
                                                    <li><a href="#">Regional Delicacies</a></li>
                                                    <li><a href="#">Sweetener, Jam Pickles</a></li>
                                                    <li><a href="#">Beverages</a></li>
                                               </ul>
                                           </li>
                                           <li class="megamenu-static-holder"><a href="#">Handicrafts</a>
                                               <ul class="megamenu hb-megamenu">
                                                   <li><a href="#">Natural Craft</a>
                                                       <ul>
                                                           <li><a href="details.php">Kannauj Perfume</a></li>
                                                           <li><a href="#">Khurja Pottery</a></li>
                                                           <li><a href="#">Indore Leather Craft</a></li>
                                                           <li><a href="#">Purulia Chhau Mask</a></li>
                                                           <li><a href="#">Firozabad Glass Craft</a></li>
                                                           <li><a href="#">Thanjavur Bommai</a></li>                                                           </li>
                                                           <li><a href="#">Thirukannur Papier Mache</a></li>
                                                           <li><a href="#">Villianur Terracotta</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href="#">Stone Craft</a>
                                                       <ul>
                                                           <li><a href="#">Agates Of Cambay</a></li>
                                                           <li><a href="#">Konark Stone Carving</a></li>
                                                           <li><a href="https://varanasi.nic.in/district-produce/varanasi-soft-stone-jali-work/" target="_blank">Varanasi Stone Craft</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href="#">Metal Craft</a>
                                                       <ul>
                                                           
                                                           <li><a href="#">Baster Dokra Art</a></li>
                                                           <li><a href="#">Baster Iron Craft</a></li>
                                                           <li><a href="#">Bidriware Silver Craft</a></li>
                                                           <li><a href="#">Moradabad Brass Craft</a></li>
                                                           <li><a href="#">Thanjavur Art Plate</a></li>
                                                       </ul>
                                                   </li>
                                                   <li><a href="#">Wooden Craft</a>
                                                       <ul>
                                                          
                                                           <li><a href="#">Baster wooden Craft</a></li>
                                                           <li><a href="#">Bobbili Veena</a></li>
                                                           <li><a href="#">Channapatna Toys</a></li>
                                                           <li><a href="#">Etikoppaka Toys</a></li>
                                                           <li><a href="#">Mysore Rosewood Inlay</a></li>
                                                           <li><a href="#">Coconut Craft Kerala</a></li>
                                                       </ul>
                                                   </li>
                                               </ul>
                                           </li>                                          
                                           <li class="dropdown-holder"><a href="#">Paintings</a>
                                                <ul class="hb-dropdown">
                                                    <li><a href="#">Aipan art Uttarakhand</a></li>
                                                    <li><a href="#">Mysore Paintings</a></li>
                                                    <li><a href="#">Mysore Ganjifa Cards</a></li>
                                                    <li><a href="#">Madhubani Paintings</a></li>
                                                    <li><a href="#">Odisha Pattachitra</a></li>
                                                    <li><a href="#">Pithora Paintings</a></li>
                                                    <li><a href="#">Kutch Rogan Art</a></li>
                                                    <li><a href="#">Bengal Pattachitra</a></li>
                                                    <li><a href="#">Andhra Leather Puppetry</a></li>
                                                    <li><a href="#">Painted Fabrics</a></li>
                                                    <li><a href="#">Tree of Life</a></li>
                                                </ul>
                                           </li>
                                            <li class="megamenu-holder"><a href="#">Jewellery</a>
                                                <ul class="megamenu hb-megamenu">
                                                    <li><a href="#">Category</a>
                                                        <ul>
                                                            <li><a href="#">Earrings</a></li>
                                                            <li><a href="#">Pendants & Neckleces</a></li>
                                                            <li><a href="#">Bangles & Bracelets</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Jewellery Craft</a>
                                                        <ul>
                                                            <li><a href="#">Agates Jewellery</a></li>
                                                            <li><a href="#">Thewa 23 KT Gold Jewellery</a></li>
                                                            <li><a href="#">Nagercoil Temple Jewellery</a></li>
                                                            <li><a href="#">Baster Dhokra</a></li>
                                                            <li><a href="#">Bidri Silver Inlay</a></li>
                                                            <li><a href="#">Channapatna Wooden</a></li>
                                                            <li><a href="#">Etikoppaka Wooden</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li><a href="about-us.php">About Us</a></li>
                                            <li><a href="contact.php">Contact</a></li>
                                            
                                        </ul>
                                   </nav>
                                </div>
                               <!-- Header Bottom Menu Area End Here -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header Bottom Area End Here -->
                <!-- Begin Mobile Menu Area -->
                <div class="mobile-menu-area mobile-menu-area-4 d-lg-none d-xl-none col-12">
                    <div class="container"> 
                        <div class="row">
                            <div class="mobile-menu">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mobile Menu Area End Here -->
            </header>