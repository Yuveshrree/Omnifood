<!DOCTYPE html>
<html lang="en">
    <head>
        <title>OmniFood</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Omnifood is a food delivery service that is intended to deliver affordable, tasty and healthy food to your door step.">
        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
        <!-- <link rel="stylesheet" href="assets/css/grid.css"> -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,300i,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="assets/favicons/site.webmanifest">
        <link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="assets/favicons/favicon.ico">
        <meta name="msapplication-TileColor" content="#b91d47">
        <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <!-- favicon -->
    </head>
    <body>
        <header class="header">
            <nav>
                <div class="row">
                    <img src="assets/img/logo-white.png" alt="OmniFood Logo" class="logo">
                    <img src="assets/img/logo.png" alt="OmniFood Logo" class="logo-black">
                    <input class="menu-btn" type="checkbox" id="menu-btn" />
  					<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
                    <ul class="navigation menu">
                        <li><a href="#features">Food delivery</a></li>
                        <li><a href="#works">How it works</a></li>
                        <li><a href="#cities">Our cities</a></li>
                        <li><a href="#plans">Sign Up</a></li>
                    </ul>
                </div>
            </nav>
            <div class="hero-text">
                <h1>Goodbye junk food.<br>Hello super healthy meals.</h1>
                <a class="btn btn-full js-scroll-to-plan" href="#">I'm hungry</a>
                <a class="btn btn-ghost  js-scroll-to-start" href="#">Show me more</a>
            </div>
        </header>

        <section class="features js-features" id="features">
            <div class="row">
                <h2>Get food fast &mdash; not fast food</h2>
                <p class="features-intro">Hello, we're Omnifood, your new premium food delivery service. We know you're always busy. No time for cooking. So let us take care of that, we're really good at it, we promise!</p>
            </div>
            <div class="row js-fadeIn">
                <div class="grid-container">
                    <div class="grid-box">
                        <i class="far fa-calendar-alt icons"></i>
                        <h3>Up to 365 days/year</h3>
                        <p>Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.</p>
                    </div>
                    <div class="grid-box">
                        <i class="far fa-clock icons"></i>
                        <h3>Ready in 20 minutes</h3>
                        <p>You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.</p>
                    </div>
                    <div class="grid-box">
                        <i class="fas fa-seedling icons"></i>
                        <h3>100% organic</h3>
                        <p>All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!</p>
                    </div>
                    <div class="grid-box">
                        <i class="fas fa-shopping-basket icons"></i>
                        <h3>Order anything</h3>
                        <p>We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="gallery">
            <ul class="grid-container">
                <li>
                    <img src="assets/img/1.jpg" alt="Korean bibimbap with egg and vegetables">
                </li>
                <li>
                    <img src="assets/img/2.jpg" alt="Simple italian pizza with cherry tomatoes">
                </li>
                <li>
                    <img src="assets/img/3.jpg" alt="Chicken breast steak with vegetables">
                </li>
                <li>
                    <img src="assets/img/4.jpg" alt="Autumn pumpkin soup">
                </li>
            </ul>
            <ul class="grid-container">
                <li>
                    <img src="assets/img/5.jpg" alt="Paleo beef steak with vegetables">
                </li>
                <li>
                    <img src="assets/img/6.jpg" alt="Healthy baguette with egg and vegetables">
                </li>
                <li>
                    <img src="assets/img/7.jpg" alt="Burger with cheddar and bacon">
                </li>
                <li>
                    <img src="assets/img/8.jpg" alt="Granola with cherries and strawberries">
                </li>
            </ul>
        </section>

        <section class="work-steps" id="works">
            <div class="row">
                <h2>How it works &mdash; Simple as 1, 2, 3</h2>
            </div>
            <div class="row">
                <div class="grid-two">
                    <div class="grid-item">
                        <img src="assets/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen js-fadeInUp">
                    </div>
                    <div class="grid-item">
                        <div class="steps">
                            <span>1</span>
                            <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                        </div>
                        <div class="steps">
                            <span>2</span>
                            <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                        </div>
                        <div class="steps">
                            <span>3</span>
                            <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                        </div>

                        <div class="store-icons">
                            <a href="#" class="app-btn"><img src="assets/img/download-app.svg" alt="App Store"></a>
                            <a href="#" class="app-btn"><img src="assets/img/download-app-android.png" alt="Play Store"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cities" id="cities">
            <div class="row">
                <h2>We're currently in these cities</h2>
            </div>
            <div class="row js-fadeIn-1">
                <div class="grid-container">
                    <div class="grid-box">
                        <img src="assets/img/lisbon-3.jpg" alt="Lisbon City">
                        <div class="content">
                            <h3>Lisbon</h3>
                            <ul class="list">
                                <li class="list-icons">
                                    <i class="fas fa-smile"></i>1600+ happy eaters
                                </li>
                                <li class="list-icons">
                                    <i class="fas fa-star"></i>60+ top chefs
                                </li>
                                <li class="list-icons">
                                    <a href="#"><i class="fab fa-twitter"></i>@omnifood_lx</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-box">
                        <img src="assets/img/san-francisco.jpg" alt="San Francisco City">
                        <div class="content">
                            <h3>San Francisco</h3>
                            <ul class="list">
                                <li class="list-icons">
                                    <i class="fas fa-smile"></i>3700+ happy eaters
                                </li>
                                <li class="list-icons">
                                    <i class="fas fa-star"></i>160+ top chefs
                                </li>
                                <li class="list-icons">
                                    <a href="#"><i class="fab fa-twitter"></i>@omnifood_sf</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-box">
                        <img src="assets/img/berlin.jpg" alt="Berlin City">
                        <div class="content">
                            <h3>Berlin</h3>
                            <ul class="list">
                                <li class="list-icons">
                                    <i class="fas fa-smile"></i>2300+ happy eaters
                                </li>
                                <li class="list-icons">
                                    <i class="fas fa-star"></i>110+ top chefs
                                </li>
                                <li class="list-icons">
                                    <a href="#"><i class="fab fa-twitter"></i>@omnifood_berlin</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="grid-box">
                        <img src="assets/img/london.jpg" alt="London City">
                        <div class="content">
                            <h3>London</h3>
                            <ul class="list">
                                <li class="list-icons">
                                    <i class="fas fa-smile"></i>1200+ happy eaters
                                </li>
                                <li class="list-icons">
                                    <i class="fas fa-star"></i>50+ top chefs
                                </li>
                                <li class="list-icons">
                                    <a href="#"><i class="fab fa-twitter"></i>@omnifood_london</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="testimonials">
            <div class="row">
                <h2>Our customers can't live without us</h2>
            </div>
            <div class="row">
                <div class="grid-three">
                    <div class="tests">
                        <blockquote>
                            Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                            <cite><img src="assets/img/customer-1.jpg" alt="Customer 1 image">Alberto Duncan</cite>
                        </blockquote>
                    </div>
                    <div class="tests">
                        <blockquote>
                            Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                            <cite><img src="assets/img/customer-2.jpg" alt="Customer 2 image">Joana Silva</cite>
                        </blockquote>
                    </div>
                    <div class="tests">
                        <blockquote>
                            I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                            <cite><img src="assets/img/customer-3.jpg" alt="Customer 3 image">Milton Chapman</cite>
                        </blockquote>
                    </div>
                </div>
            </div>
        </section>

        <section class="plans js-plans" id="plans">
            <div class="row">
                <h2>Start eating healthy today</h2>
            </div>
            <div class="row">
                <div class="grid-three">
                    <div class="plan-cards js-pulse">
                        <div>
                            <h3>Premium</h3>
                            <p class="price">$399 <span>/ month</span></p>
                            <p class="meal-price">That's only 13.30$ per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li class="list-icons"><i class="fas fa-check"></i>1 meal every day</li>
                                <li class="list-icons"><i class="fas fa-check"></i>Order 24/7</li>
                                <li class="list-icons"><i class="fas fa-check"></i>Access to newest creations</li>
                                <li class="list-icons"><i class="fas fa-check"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a class="btn btn-full" href="#">Sign up now</a>
                        </div>
                    </div>
                    <div class="plan-cards">
                        <div>
                            <h3>Pro</h3>
                            <p class="price">$149 <span>/ month</span></p>
                            <p class="meal-price">That's only 14.90$ per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li class="list-icons"><i class="fas fa-check"></i>1 meal 10 days/month</li>
                                <li class="list-icons"><i class="fas fa-check"></i>Order 24/7</li>
                                <li class="list-icons"><i class="fas fa-check"></i>Access to newest creations</li>
                                <li class="list-icons"><i class="fas fa-check"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a class="btn btn-ghost" href="#">Sign up now</a>
                        </div>
                    </div>
                    <div class="plan-cards">
                        <div>
                            <h3>Starter</h3>
                            <p class="price">$19 <span>/ meal</span></p>
                            <p class="meal-price">&nbsp;</p>
                        </div>
                        <div>
                            <ul>
                                <li class="list-icons"><i class="fas fa-check"></i>1 meal</li>
                                <li class="list-icons"><i class="fas fa-check"></i>Order from 8 am to 12 pm</li>
                                <li class="list-icons"><i class="fas fa-times"></i></li>
                                <li class="list-icons"><i class="fas fa-check"></i>Free delivery</li>
                            </ul>
                        </div>
                        <div>
                            <a class="btn btn-ghost" href="#">Sign up now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="form">
            <div class="row">
                <h2>We're happy to hear from you</h2>
            </div>
            <div class="row">
                <form method="POST" action="assets/php/mailer.php" class="contact-form">
                    <div class="row">
                        <?php
                        if($_GET['success'] == 1) {
                            echo "<div class=\"form-message success\"> Thank You! Your message has been sent.</div>";
                        }

                        if($_GET['success'] == -1) {
                            echo "<div class=\"form-message error\"> Something went wrong! Please try again. </div>";
                        }
                        ?>
                    </div>

                    <div class="row">
                        <div class="grid-form">
                            <div class="form-item">
                                <label for="name">Name</label>
                            </div>
                            <div class="form-item">
                                <input type="text" name="name" id="name" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="grid-form">
                            <div class="form-item">
                                <label for="email">Email</label>
                            </div>
                            <div class="form-item">
                                <input type="email" name="email" id="email" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="grid-form">
                            <div class="form-item">
                                <label for="find_us">How did you find us?</label>
                            </div>
                            <div class="form-item">
                                <select name="find_us" id="find_us">
                                    <option value="friends" selected>Friends</option>
                                    <option value="search">Search Engine</option>
                                    <option value="ad">Advertisement</option>
                                    <option value="other">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="grid-form">
                            <div class="form-item">
                                <label>Newsletter?</label>
                            </div>
                            <div class="form-item">
                                <input type="checkbox" name="news" id="news" checked> Yes, please
                            </div>
                        </div>
                        <div class="grid-form">
                            <div class="form-item">
                                <label>Drop us a line</label>
                            </div>
                            <div class="form-item">
                                <textarea name="message" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <div class="grid-form">
                            <div class="form-item">
                                <label>&nbsp;</label>
                            </div>
                            <div class="form-item">
                                <input type="submit" value="Send it!">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <footer>
            <div class="row">
                <div class="grid-two">
                    <div class="footer-grid">
                        <ul class="footer-nav">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Press</a></li>
                            <li><a href="#">iOS App</a></li>
                            <li><a href="#">Android App</a></li>
                        </ul>
                    </div>
                    <div class="footer-grid">
                        <ul class="social-links">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <p>Copyright &copy; 2020 Omnifood. All Rights Reserved.</p>
            </div>
        </footer>

        <script src="https://kit.fontawesome.com/128bac6dd8.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- From jsdelivr.com -->
        <script src="https://cdn.jsdelivr.net/npm/respond@0.9.0/main.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/selectivizr@1.0.3/selectivizr.min.js"></script>
        <!-- From jsdelivr.com -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
        <script src="assets/js/scripts.js"></script>

        <!-- From cdnjs.com
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script> 
        -->
    </body>
</html>