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
        <a href="#"><img src="img/logo.png" class="logo" alt=""> </a>
        <div>
            <ui id="navbar">
            <li><a class="active" href="index.html">Home</a></li>
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
    <section id="signup" style="display: none;">
        <div id="mcontainer">
            <h2 class="form-title">Register</h2>
        <form method="post" action="register1.php">
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input class="input" type="text" placeholder="First Name" name="fName" required>
                <label class="label" for="name">First Name</label>
            </div>
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input class="input" type="text" placeholder="Last Name" name="lName" required>
                <label class="label" for="name">Last Name</label>
            </div>
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input class="input" type="email" placeholder="Email" id="email" name="email" required>
                <label class="label" for="email">Email</label>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input class="input" type="password" placeholder="Password" id="password" name="password" required>
                <label class="label" for="password">Password</label>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="Sign Up"  id="signpagebutton" name="signUp" >
            </div>
        </form>
        <p class="or">
            ---------------or-----------------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin-in"></i>
        </div>
        <div class="links">
            <p class="signup-text">Already have an account?</p>
            <button class="btn1" id="signinbutton">Sign In</button>
        </div>
        </div>
    </section>
    <section id="signin" style="display: block;">
        <div id="mcontainer">
            <h2 class="form-title">Login</h2>
        <form method="post" action="register1.php">
            <div class="form-group">
                <i class="fas fa-envelope"></i>
                <input class="input" type="email" placeholder="Email" id="email" name="email" required>
                <label class="label" for="email">Email</label>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input class="input" type="password" placeholder="Password" id="password" name="password" required>
                <label class="label" for="password">Password</label>
            </div>
            <div class="form-group">
                <a href="#" class="forgot">Forgot Password?</a>
            </div>
            <div class="form-group">
                <input type="submit" class="btn" value="Sign In"  id="signpagebutton" name="signIn" >
            </div>
        </form>
        <p class="or">
            ---------------or-----------------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-linkedin-in"></i>
        </div>
        <div class="links">
            <p class="signup-text">Don't have an account yet?</p>
            <button class="btn1" id="signupbutton">Sign Up</button>
        </div>
        </div>
    </section>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For NewsLetter</h4>
            <p>Get E mail update about our <span>exclusive deals</span> and updates</p>
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
    
    <script src="script2.js"></script>
<script>
    const urlParams = new URLSearchParams(window.location.search);
    const workshopName = urlParams.get('workshopName');
    const workshopPrice = urlParams.get('workshopPrice');

    // Add hidden inputs dynamically
    const form = document.querySelector("form");
    if (workshopName && workshopPrice) {
        const nameInput = document.createElement("input");
        nameInput.type = "hidden";
        nameInput.name = "workshopName";
        nameInput.value = workshopName;

        const priceInput = document.createElement("input");
        priceInput.type = "hidden";
        priceInput.name = "workshopPrice";
        priceInput.value = workshopPrice;

        form.appendChild(nameInput);
        form.appendChild(priceInput);
    }
</script>
</body>
</html>