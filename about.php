<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Piston Cult</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="assets/style/about.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" class="favicon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/style/home.css">
</head>
<body>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header" style="position: fixed; background: hsl(283, 89%, 7%);">
        <nav class="nav container">
            <a href="PistonCult_home.php" class="nav__logo"> 
                <img src="assets/img/logo.jpg" width="60px" height="60px" style="border-radius:10px;">
                PistonCult
            </a>
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="PistonCult_home.php" class="nav__link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="chat.php" class="nav__link">Chat</a>
                    </li> 
                    <li id="categoryMenuCar">
                        <p class="sc">
                            Super Cars <span id="arrow">▼</span> 
                            <div class="mega-dropdown-car" id="megaMenuCar">
                                <!-- All Brands -->
                                <h3 class="all">ALL</h3> 
                                <div class="mega-column">
                                    <ul>
                                        <form action="car.php" method="POST">
                                            <input type="hidden" name="id1" value="lambo">
                                            <button type="submit" class="bt-car"><li>BMW</li></button>
                                        </form>
                                        <form action="car.php" method="POST">
                                            <input type="hidden" name="id2" value="lambo">
                                            <button type="submit" class="bt-car"><li>Buggati</li></button>
                                        </form>
                                        <form action="car.php" method="POST">
                                            <input type="hidden" name="id3" value="lambo">
                                            <button type="submit" class="bt-car"><li>Ferrari</li></button>
                                        </form>
                                        <form action="car.php" method="POST">
                                            <input type="hidden" name="id4" value="lambo">
                                            <button type="submit" class="bt-car"><li>Lamborgini</li></button>
                                        </form>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <ul>
                                    <form action="car.php" method="POST">
                                            <input type="hidden" name="id5" value="lambo">
                                            <button type="submit" class="bt-car"><li>Mahindra</li></button>
                                        </form>
                                        <form action="car.php" method="POST">
                                            <input type="hidden" name="id6" value="lambo">
                                            <button type="submit" class="bt-car"><li>Maruti</li></button>
                                        </form>
                                        <form action="car.php" method="POST">
                                            <input type="hidden" name="id7" value="lambo">
                                            <button type="submit" class="bt-car"><li>Mercedes</li></button>
                                        </form>
                                        <form action="car.php" method="POST">
                                            <input type="hidden" name="id8" value="lambo">
                                            <button type="submit" class="bt-car"><li>Toyota</li></button>
                                        </form>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <ul>
                                    <form action="car.php" method="POST">
                                            <input type="hidden" name="id9" value="lambo">
                                            <button type="submit" class="bt-car"><li>BMW</li></button>
                                        </form>
                                        <form action="car.php" method="POST">
                                            <input type="hidden" name="id10" value="lambo">
                                            <button type="submit" class="bt-car"><li>Buggati</li></button>
                                        </form>
                                        <form action="car.php" method="POST">
                                            <input type="hidden" name="id11" value="lambo">
                                            <button type="submit" class="bt-car"><li>Ferrari</li></button>
                                        </form>
                                        <form action="car.php" method="POST">
                                            <input type="hidden" name="id12" value="lambo">
                                            <button type="submit" class="bt-car"><li>Lamborgini</li></button>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </p>
                    </li>
                    <li class="nav__item">
                        <p class="sc" id="categoryMenu">
                            Shop <span id="arrow1">▼</span>
                            <div class="mega-dropdown" id="megaMenu">
                                <!-- Wheels -->
                                <div class="mega-column" >
                                    <h3>Wheels</h3>
                                    <ul>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="brakes" value="lambo">
                                            <button type="submit" class="bt-car"><li>Brakes</li></button>
                                        </form>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="rims" value="lambo">
                                            <button type="submit" class="bt-car"><li>Rims</li></button>
                                        </form>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="tyres" value="lambo">
                                            <button type="submit" class="bt-car"><li>Tyres</li></button>
                                        </form>
                                    </ul>
                                </div>
            
                                <!-- Powertrain -->
                                <div class="mega-column" style="margin-left: -35px;">
                                    <h3>Powertrain</h3>
                                    <ul>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="air_filter" value="lambo">
                                            <button type="submit" class="bt-car"><li>Air Filters</li></button>
                                        </form>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="clutch" value="lambo">
                                            <button type="submit" class="bt-car"><li>Clutch</li></button> 
                                        </form>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="crankshaft" value="lambo">
                                            <button type="submit" class="bt-car"><li>Crankshaft</li></button>
                                        </form>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="engine" value="lambo">
                                            <button type="submit" class="bt-car"><li>Engine</li></button>
                                        </form>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="transmission" value="lambo">
                                            <button type="submit" class="bt-car"><li>Transmission</li></button>
                                        </form>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="turbo" value="lambo">
                                            <button type="submit" class="bt-car"><li>Turbos</li></button>
                                        </form>
                                    </ul>
                                </div>
            
                                <!-- Interior Accessories -->
                                <div class="mega-column">
                                    <h3>Interior Accessories</h3>
                                    <ul>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="air_freshner" value="lambo">
                                            <button type="submit" class="bt-car"><li>Air Freshner</li></button>
                                        </form>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="ambient_light" value="lambo">
                                            <button type="submit" class="bt-car"><li>Ambient Lights</li></button>
                                        </form>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="floor_mate" value="lambo">
                                            <button type="submit" class="bt-car"><li>Floor Mats</li></button>
                                        </form>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="seat_cover" value="lambo">
                                            <button type="submit" class="bt-car"><li>Seat Covers</li></button>
                                        </form>
                                        <form class="acc" action="shop.php" method="POST">
                                            <input type="hidden" name="wheel_cover" value="lambo">
                                            <button type="submit" class="bt-car"><li>Wheel Cover</li></button>
                                        </form>
                                    </ul>
                                </div>
                            </div>
                        </p>
                    </li>
                    <li class="nav__item"> 
                        <a href="cart.php" class="nav__link">Cart</a>
                    </li>
                    <li class="nav__item">
                        <a href="about.php" class="nav__link">About</a>
                    </li>
                    <li class="nav__item">
                        <a href="login.php" class="nav__link">
<?php
                            if(isset($_COOKIE["id"]) && isset($_COOKIE["session"])){
                                echo $_COOKIE['un'];
                            }
                            else{
                                echo "Login";
                            }
?>
                        </a>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>
            <!-- Togglar Button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav> 
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <div class="container">
                <h2 class="animate-on-scroll">About Piston Cult</h2>
                <p class="tagline animate-on-scroll">Where Passion Meets the Road</p>
                <p class="animate-on-scroll">
                    Welcome to <strong>Piston Cult</strong>, the ultimate destination for car enthusiasts, petrolheads, and anyone who lives and breathes automobiles. Whether you're here to buy or sell car parts, organize or participate in car meets, or simply connect with fellow car lovers, Piston Cult is your one-stop hub for all things automotive.
                </p>
            </div>
        </section>

        <!-- Features Section -->
        <section class="features">
            <div class="container">
                <h2 class="animate-on-scroll">What We Offer</h2>
                <div class="features-grid">
                    <div class="feature animate-on-scroll">
                        <h3>🚗 Marketplace</h3>
                        <p>
                            Buy and sell car parts, accessories, and even entire vehicles with ease. Our marketplace is designed for petrolheads, by petrolheads.
                        </p>
                    </div>
                    <div class="feature animate-on-scroll">
                        <h3>🏁 Car Meets</h3>
                        <p>
                            Organize or participate in car meets near you. Connect with like-minded enthusiasts and showcase your ride.
                        </p>
                    </div>
                    <div class="feature animate-on-scroll">
                        <h3>💬 Community Chat</h3>
                        <p>
                            Join the conversation in our exclusive chat rooms. Discuss builds, share tips, and make lifelong friends.
                        </p>
                    </div>
                    <div class="feature animate-on-scroll">
                        <h3>📸 Showcase Your Ride</h3>
                        <p>
                            Share photos and videos of your car, and get inspired by others in the community.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission Section -->
        <section class="mission">
            <div class="container">
                <h2 class="animate-on-scroll">Our Mission</h2>
                <p class="animate-on-scroll">
                    At <strong>Piston Cult</strong>, our mission is to bring car enthusiasts together and create a thriving community where passion for automobiles is celebrated. We believe that cars are more than just machines—they're a way of life. Whether you're a seasoned gearhead or just starting your journey, Piston Cult is here to fuel your passion.
                </p>
            </div>
        </section>

        <!-- Join Section -->
        <section class="join">
            <div class="container">
                <h2 class="animate-on-scroll">Join the Cult</h2>
                <p class="animate-on-scroll">
                    Ready to become part of the Piston Cult family? Sign up today and start exploring everything we have to offer. Whether you're here to buy, sell, chat, or just admire beautiful cars, there's a place for you in our community.
                </p>
                <a href="#" class="cta-button animate-on-scroll">Sign Up Now</a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p class="animate-on-scroll">&copy; 2023 Piston Cult. All rights reserved.</p>
            <ul>
                <li><a href="#" class="animate-on-scroll">Privacy Policy</a></li>
                <li><a href="#" class="animate-on-scroll">Terms of Service</a></li>
                <li><a href="#" class="animate-on-scroll">Contact Us</a></li>
            </ul>
        </div>
    </footer>

    <!-- Scroll Reveal Library -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <script>
        // Initialize ScrollReveal
        ScrollReveal().reveal('.animate-on-scroll', {
            delay: 200,
            distance: '20px',
            duration: 1000,
            easing: 'ease-in-out',
            origin: 'top', // Animations start from the top
            interval: 200, // Delay between animations
        });
    </script>
</body>
</html>