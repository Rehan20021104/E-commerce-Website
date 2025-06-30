<?php
session_start();
include("connect.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanka Crafts</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section id="header"> 
        <a href="index.php"><img src="img/logo.png" class="logo" alt=""> </a>
        <div>
            <ui id="navbar">
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="shop.html">Products</a></li>
                <li><a href="workshops.html">Workshops</a></li>
                <li><a href="blog.html">Gallery</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li id="lg-bag"><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#"id="close"><i class="far fa-times"></i></a>
            </ui>
        </div>
        <div id="mobile">
            <a href="Cart.html"><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-bars"></i>
        </div>
    </section>
    <section id="hero">
        <h4>Best-offers</h4>
        <h2>Super value deals</h2>
        <h1>on all our products</h1>
        <p>use coupons to save 75% off</p>
        <button>Shop Now</button>
    </section>
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promomtions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Happy sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>
    <section id="product1" class="section-p1">
        <div class="f-head">
        <h2>Features Products</h2>
        <p>New-good quality-products</p>
        </div>
        <div class="pro-container">
            <div class="pro">
                <img src="img/Products/cl1.jpg">
                <div class="des">
                    <span class="brand">Clothing</span>
                    <h5>Handloom Cotton Sarees</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>LKR 9000.00</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
            <div class="pro">
                <img src="img/Products/cl2.jpg">
                <div class="des">
                    <span class="brand">Clothing</span>
                    <h5>Batik Sarongs</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>LKR 4000.00</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
            <div class="pro">
                <img src="img/Products/acc1.jpg">
                <div class="des">
                    <span class="brand">Accessories</span>
                    <h5>Coconut Shell Earrings</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>LKR 1500.00</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
            <div class="pro">
                <img src="img/Products/acc2.jpg">
                <div class="des">
                    <span class="brand">Accessories</span>
                    <h5>Hand-Beaded Bracelets</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>LKR 2000.00</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
            <div class="pro">
                <img src="img/Products/home1.jpg">
                <div class="des">
                    <span class="brand">LC</span>
                    <h5>Hand-Carved Wooden Wall Art</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$40</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
            <div class="pro">
                <img src="img/Products/home2.jpg">
                <div class="des">
                    <span class="brand">LC</span>
                    <h5>Coconut Shell Candle Holderss</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$15</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
            <div class="pro">
                <img src="img/Products/skin1.jpg">
                <div class="des">
                    <span class="brand">LC</span>
                    <h5>Ceylon Cinnamon Face Scrub</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$12</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
            <div class="pro">
                <img src="img/Products/skin2.jpg">
                <div class="des">
                    <span class="brand">LC</span>
                    <h5>Aloe Vera & Neem Soap Bars</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>$8</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
    </section>
    <section id="banner" class="section-m1">
        <h4>Repair services</h4>
        <h2>Up to - <span>70% off</span> - All Products</h2>
        <button class="normal">Explore More</button>
    </section>
    <section id="product1" class="section-p1">
        <div class="f-head">
        <h2>New Arrivals</h2>
        <p>New-good quality-products</p>
        </div>
        <div class="pro-container">
            <div class="pro">
                <img src="img/Products/cl3.jpg">
                <div class="des">
                    <span class="brand">Clothing</span>
                    <h5>Organic Cotton T-Shirts</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>LKR 3000.00</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
            <div class="pro">
                <img src="img/Products/cl4.jpg">
                <div class="des">
                    <span class="brand">Clothing</span>
                    <h5>Embroidered Linen Tunics</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>LKR 4500.00</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
            <div class="pro">
                <img src="img/Products/acc3.jpg">
                <div class="des">
                    <span class="brand">Accessories</span>
                    <h5>Bamboo Sunglasses</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>LKR 6000.00</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
            <div class="pro">
                <img src="img/Products/acc4.jpg">
                <div class="des">
                    <span class="brand">Accessories</span>
                    <h5>Leather Wallets</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>LKR 3000.00</h4>
                </div>
                <a href="#" ><i class="fal fa-shopping-cart" style="color: #088178;"></i></a>
            </div>
    </section>
    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>Crazy Deals</h4>
            <h2>Buy 1 And Get 1 Free</h2>
            <span>The best Classic products</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Update Your Fashion</h4>
            <h2>New Trend</h2>
            <span>Our best - good Quality - products</span>
            <button class="white">Collections</button>
        </div>
    </section>
    <section id="banner3">
        <div class="banner-box">
            <h2>New Sale</h2>
            <h3>New products -50% OFF</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>Best Accessories</h2>
            <h3>2024 Trend</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>New Gen Fashion</h2>
            <h3>Try New Fashion</h3>
        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For NewsLetter</h4>
            <p>Get E mail update about our <span>exclusive deals</span> and updates</p>
        </div>
        <div class="form">
            <input type="email" placeholder="Enter Your Email">
            <button class="normal" onclick="window.location.href='index2.php'">Sign Up</button>
        </div>
    </section>
    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/logo.png">
            <h4>Contact</h4>
            <p><strong>Address:</strong> Jayamalapura rd, Gampola, Kandy, Sri Lanka</p>
            <p><strong>Phone:</strong> +94 776969699</p>
            <p><strong>Hours:</strong> 8:00 - 21:00, Mon - Sat</p>
            <div class="folow">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="about.html">About Us</a>
            <a href="#">Delivery Informations</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditions</a>
            <a href="contact.html">Contact Us</a>
        </div>
        <div class="col">
            <h4>My Acccount</h4>
            <a href="index2.php">Sign in</a>
            <a href="cart.html">View Cart</a>
            <a href="#">My Whishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
        <div class="col">
            <h4>Install App</h4>
            <p>From App Store or Play Store</p>
            <div class="row">
                <img src="img/pay/app.jpg">
                <img src="img/pay/play.jpg">
            </div>
            <p>Secure paymnet Gateways</p>
            <img src="img/pay/pay.png">
        </div>
        <div class="copyright">
            <p>&copy; 2024 Lanka Crafts. All Rights Reserved</p>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>