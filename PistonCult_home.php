<?php
    require_once('google-api/google_config.php');
    require_once('class/controller.Class.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" class="favicon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/style/home.css">
    <title>Piston Cult</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
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
                    <li id="chat">
                        <p class="sc">
                            Chat <span id="arrow2">▼</span> 
                            <div class="chat_dropdown" id="chatmenu">
                                <!-- All Brands -->
                                <div class="mega-column">
                                    <ul>
                                        <a href="chat.php" class="chat_all">Global Chat</a>
                                        <a href="OnetoOne.php" class="chat_all">Personal Chat</a>
                                    </ul>
                                </div>
                            </div>
                        </p>
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

    <!--************* MAIN CODE ****************-->
    <!--==================== HOME ====================-->
    <div class="home" id="home">
        <div class="home__container container grid">
            <div class="home__data">
                <h1 class="home__title">
                    Get Ready For a Overwhelming Experience
                </h1>
                <h2 class="home__subtitle">
                    Ferrari F12tdf
                </h2>
                <h3 class="home__elec">
                    <i class="ri-flashlight-fill"></i>
                    RELENTLESS FORCE
                </h3>
            </div>

            <img src="assets/img/home5.png" alt="" class="home__img">
            <div class="home__car">
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-temp-cold-line"></i>
                    </div>
                    <h2 class="home__car-number">3.1s</h2>
                    <h3 class="home__car-name">0-100 km/h</h3>
                </div>
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-dashboard-2-line"></i>
                    </div>
                    <h2 class="home__car-number">574</h2>
                    <h3 class="home__car-name">POWER (KW)</h3>
                </div>
                <div class="home__car-data">
                    <div class="home__car-icon">
                        <i class="ri-flashlight-fill"></i>
                    </div>
                    <h2 class="home__car-number">340 km/h</h2>
                    <h3 class="home__car-name">MAX. SPEED</h3>
                </div>
            </div>
            <button id="engineButton" class="home__button" style="background-color: black;">Start Engine</button>
            <audio id="carEngine" src="assets/img/car-engine-sound.mp3" preload="auto"></audio>
            <div class="slider__bg">
                <div class="slider__bg-navBtn active"></div>
                <div class="slider__bg-navBtn"></div>
                <div class="slider__bg-navBtn"></div>
                <div class="slider__bg-navBtn"></div>
                <div class="slider__bg-navBtn"></div>
            </div><br>
        </div>
    </div>
    
    <!--==================== GALLERY BANNER ====================-->
    <div class="gallery__container container grid">
        <video id="vid" class="video__slide active" src="assets/video/vid_1.mp4" autoplay muted loop></video>
        <video class="video__slide" src="assets/video/vid_4.mp4" autoplay muted loop></video>
        <video class="video__slide" src="assets/video/vid_3.mp4" autoplay muted loop></video>
        <video class="video__slide" src="assets/video/vid_2.mp4" autoplay muted loop></video>
        <video class="video__slide" src="assets/video/vid_5.mp4" autoplay muted loop></video>
    </div>      
            
    <div class="main">
        <div class="content1">
            <!--==================== DAILY NEWS ====================-->
            <div id="news" class="news">
                <br><br><br><br>
                <h3 class="new_section__title">Daily News</h3><br>
                <div class="slideshow-container">
                    <div class="slides">
                    <div class="slide">
                        <a href="https://www.cardekho.com/india-car-news/all-the-confirmed-and-expected-cars-to-be-launched-in-india-in-march-2025-34131.htm">
                            <img src="assets/img/n1.avif" alt="Slide 1">
                            <div class="slide-text">All The Confirmed And Expected Cars To Be Launched In India In March 2025</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://www.msn.com/en-in/news/other/3-auto-theft-gang-members-who-used-to-target-high-end-cars-arrested/ar-AA1zmW6A?ocid=BingNewsVerp">
                            <img src="assets/img/n2.jpg" alt="Slide 2">
                            <div class="slide-text">3 auto-theft gang members who used to target high-end cars arrested</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://www.financialexpress.com/policy/economy-india-weighs-tariff-cuts-on-cars-chemicals-to-avert-us-trade-penalties-boost-deal-talks-3762701/">
                            <img src="assets/img/n3.avif" alt="Slide 3">
                            <div class="slide-text">India weighs tariff cuts on cars, chemicals to avert US trade penalties, boost deal talks</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://www.cardekho.com/india-car-news/why-are-indian-buyers-still-hesitant-about-evs-key-concerns-solutions-34128.htm">
                            <img src="assets/img/n4.avif" alt="Slide 4">
                            <div class="slide-text">Why are Indian Buyers Still Hesitant About EVs? Key Concerns & Solutions</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://www.msn.com/en-in/autos/news/ratan-tata-s-tata-motors-ready-for-its-biggest-launch-rival-to-elon-musk-s-tesla-is-named-as-its-price-is-rs/ar-AA1zTNms?ocid=BingNewsVerp">
                            <img src="assets/img/n5.jpg" alt="Slide 5">
                            <div class="slide-text">Ratan Tata’s Tata Motors ready for its biggest launch, rival to Elon Musk’s Tesla is named as…, its price is Rs…</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://www.msn.com/en-in/lifestyle/travel/watch-as-25-crore-flying-car-soars-over-traffic-in-stunning-first-vertical-flight/ar-AA1zBobY?ocid=BingNewsVerp">
                            <img src="assets/img/n6.png" alt="Slide 6">
                            <div class="slide-text">Watch as ₹2.5 crore flying car soars over traffic in stunning first 'vertical' flight</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://www.team-bhp.com/news/toyota-developing-new-mr2-celica-lexus-supercar">
                            <img src="assets/img/n7.png" alt="Slide 7">
                            <div class="slide-text">Toyota developing new MR2, Celica & Lexus supercar</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://www.reuters.com/sports/formula1/mercedes-unveil-f1-car-new-era-with-russell-antonelli-2025-02-24/">
                            <img src="assets/img/n8.png" alt="Slide 8">
                            <div class="slide-text">Mercedes unveil F1 car for new era with Russell and Antonelli</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://www.esquire.com/uk/design/a63700292/jaguars-rebrand-inside-story/">
                            <img src="assets/img/n9.avif" alt="Slide 9">
                            <div class="slide-text">Jag Man Must Die: The Inside Story of Jaguar's Polarising Rebrand</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://www.msn.com/en-gb/cars/general/uk-driving-law-kicks-in-on-saturday-for-all-new-registered-cars/ar-AA1zYvK2?ocid=BingNewsVerp">
                            <img src="assets/img/n10.jpg" alt="Slide 10">
                            <div class="slide-text">UK driving law kicks in on Saturday for all new registered cars</div>
                        </a>
                    </div>
                    <div class="slide">
                        <a href="https://www.cardekho.com/india-car-news/all-the-confirmed-and-expected-cars-to-be-launched-in-india-in-march-2025-34131.htm">
                            <img src="assets/img/n1.avif" alt="Slide 10">
                            <div class="slide-text">All The Confirmed And Expected Cars To Be Launched In India In March 2025</div>
                        </a>
                    </div>

                    </div>
                    <div class="dots">
                    <div class="dot" data-index="0"></div>
                    <div class="dot" data-index="1"></div>
                    <div class="dot" data-index="2"></div>
                    <div class="dot" data-index="3"></div>
                    <div class="dot" data-index="4"></div>
                    <div class="dot" data-index="5"></div>
                    <div class="dot" data-index="6"></div>
                    <div class="dot" data-index="7"></div>
                    <div class="dot" data-index="8"></div>
                    <div class="dot" data-index="9"></div>
                    <div class="dot" data-index="10"></div>
                    </div>
                </div>
            </div>

            <!--==================== Selling car ====================-->
            <div class="popular section" >
                <h2 class="section__title">
                    Categories of Cars on Sale
                </h2>
                <div class="popular__container">
                    <button class="scroll-arrow left" onclick="scrollLeft()">&#8249;</button>
                    <div class="brand-container" id="brand">   
                        <article class="brand__card swiper-slide">
                            <form action="car.php" method="POST">
                                <input type="hidden" name="id4" value="lambo">
                                <input type="image" src="assets/img/logo4.png" alt="Submit" class="brand__img">
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form action="car.php" method="POST">
                                <input type="hidden" name="id1" value="lambo">
                                <input type="image" src="assets/img/logo5.png" alt="Submit" class="brand__img">
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form action="car.php" method="POST">
                                <input type="hidden" name="id2" value="lambo">
                                <input type="image" src="assets/img/logo7.png" alt="Submit" class="brand__img">
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form action="car.php" method="POST">
                                <input type="hidden" name="id3" value="lambo">
                                <input type="image" src="assets/img/logo8.png" alt="Submit" class="brand__img">
                            </form>
                        </article>         
                        <article class="brand__card swiper-slide">
                            <form action="car.php" method="POST">
                                <input type="hidden" name="id5" value="lambo">
                                <input type="image" src="assets/img/logo9.avif" alt="Submit" class="brand__img">
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <img src="assets/img/logo1.png" alt="" class="brand__img">
                        </article>
                        <article class="brand__card swiper-slide">
                            <img src="assets/img/logo2.png" alt="" class="brand__img">
                        </article>
                        <article class="brand__card swiper-slide">
                            <img src="assets/img/logo3.png" alt="" class="brand__img">
                        </article>
                        <article class="brand__card swiper-slide">
                            <img src="assets/img/logo6.png" alt="" class="brand__img">
                        </article>
                        <article class="brand__card swiper-slide">
                            <form action="car.php" method="POST">
                                <input type="hidden" name="id6" value="lambo">
                                <input type="image" src="assets/img/logo10.png" alt="Submit" class="brand__img">
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form action="car.php" method="POST">
                                <input type="hidden" name="id7" value="lambo">
                                <input type="image" src="assets/img/logo11.png" alt="Submit" class="brand__img">
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form action="car.php" method="POST">
                                <input type="hidden" name="id8" value="lambo">
                                <input type="image" src="assets/img/logo12.jpg" alt="Submit" class="brand__img">
                            </form>
                        </article>
                    </div>
                    <button class="scroll-arrow right" onclick="scrollRight()">&#8250;</button>
                </div>
            </div>

            <!--==================== Accessories ====================-->
            <div class="popular section">
                <h2 class="section__title">
                    Categories of Accessories on Sale
                </h2>
                <div class="popular__container">
                    <button class="scroll-arrow left" onclick="scrollLeft()">&#8249;</button>
                    <div class="brand-container" id="shop">
                        <article class="brand__card swiper-slide">
                            <form class="acc" action="shop.php" method="POST">
                                <input type="hidden" name="air_filter" value="lambo">
                                <input type="image" src="https://imgs.search.brave.com/xUWm3R4FAfOFbIjIqZ4fhtRyFx1ZMcBoGkr_wfRuBlM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/MjFzN2lXcmJEWUwu/anBn" alt="Submit" class="brand__img">
                                <h2 style="margin-left:32%">Air Filter</h2>
                            </form>       
                        </article>
                        <article class="brand__card swiper-slide">
                            <form class="acc" action="shop.php" method="POST">
                                <input type="hidden" name="clutch" value="lambo">
                                <input type="image" src="https://imgs.search.brave.com/iTclCn_kezj4S5hPXojjgXwD5ApG-sHe-_nSbIWC89U/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9jZG4x/MS5iaWdjb21tZXJj/ZS5jb20vcy1obnNz/Y2VvYWlnL2ltYWdl/cy9zdGVuY2lsL29y/aWdpbmFsL3Byb2R1/Y3RzLzQ3NTI5Ni82/MDc4MTYvYjE0MTli/YzEtYjYzZC00Njg2/LTkyMTktZjZmOTYy/NjE3MzQ2LTgwMF9f/NDQ1NDkuMTY0MDgw/MTkxNy5qcGc_Yz0x" alt="Submit" class="brand__img">
                                <h2 style="margin-left:32%">Clutch</h2>
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form class="acc" action="shop.php" method="POST">
                                <input type="hidden" name="crankshaft" value="lambo">
                                <input type="image" src="https://imgs.search.brave.com/ctBXw8E_UmvphCyHiloPQi-iJ0GcN-8hjUXVbYI9MyA/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/cHJvdHVyYm8udXMv/d3AtY29udGVudC9z/bXVzaC13ZWJwLzIw/MjMvMTAvMzUzNTMy/NEhfQ0hSQS5qcGcu/d2VicA" alt="Submit" class="brand__img">
                                <h2 style="margin-left:20%">Crankshaft</h2>
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form class="acc" action="shop.php" method="POST">
                                <input type="hidden" name="engine" value="lambo">
                                <input type="image" src="https://imgs.search.brave.com/oZ6KfZtRIMzr3YhP00GjIvM_VO7MuNWarlk236kRhSE/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/c2xhc2hnZWFyLmNv/bS9pbWcvZ2FsbGVy/eS9hLWxvb2stYXQt/dGhlLTQtMC10ZnNp/LWVuZ2luZS10aGF0/LXBvd2Vycy10aGUt/YXVkaS1ycy03LXNw/b3J0YmFjay9pbnRy/by0xNzA0NjU3Mjc2/LmpwZw" alt="Submit" class="brand__img">
                                <h2 style="margin-left:32%">Engine</h2>
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form class="acc" action="shop.php" method="POST">
                                <input type="hidden" name="transmission" value="lambo">
                                <input type="image" src="https://imgs.search.brave.com/YWUSLWgOwAqlRm1qbL5gD5bFZyGHf9YdHGu6vrRufzw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/Zm9yZC10cnVja3Mu/Y29tL3dwLWNvbnRl/bnQvdXBsb2Fkcy8y/MDI0LzExL1RyYW5z/aXQxMC1zcGVlZC1U/cmFuc21pc3Npb24u/anBn" alt="Submit" class="brand__img">
                                <h2 style="margin-left:15%">Transmission</h2>
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form class="acc" action="shop.php" method="POST">
                                <input type="hidden" name="turbo" value="lambo">
                                <input type="image" src="https://turboturbos.com/cdn/shop/products/CIFW_VA430131_1.1_300x300.jpg?v=1583350119" alt="Submit" class="brand__img">
                                <h2 style="margin-left:32%">Turbo</h2>
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form class="acc" action="shop.php" method="POST">
                                <input type="hidden" name="air_freshner" value="lambo">
                                <input type="image" src="https://elegantautoretail.com/cdn/shop/files/airprosphereblue_b973df4a-b662-43c0-9983-90b11e45dbe4_280x315@2x.jpg?v=1692944538" alt="Submit" class="brand__img">
                                <h2 style="margin-left:15%">Air Freshner</h2>
                            </form>        
                        </article>
                        <article class="brand__card swiper-slide">
                            <form class="acc" action="shop.php" method="POST">
                                <input type="hidden" name="floor_mate" value="lambo">
                                <input type="image" src="https://elegantautoretail.com/cdn/shop/files/000000001_70199a56-2a39-4009-bcb3-f754ada162a7_280x315@2x.jpg?v=1696679451" alt="Submit" class="brand__img">
                                <h2 style="margin-left:32%">Floor Mat</h2>
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form class="acc" action="shop.php" method="POST">
                                <input type="hidden" name="seat_cover" value="lambo">
                                <input type="image" src="https://elegantautoretail.com/cdn/shop/files/4_1cab3e3e-9308-4f39-8e1d-6e49e42cf2a3_280x315@2x.jpg?v=1690622790" alt="Submit" class="brand__img">
                                <h2 style="margin-left:20%">Seat Cover</h2>
                            </form>
                        </article>
                        <article class="brand__card swiper-slide">
                            <form class="acc" action="shop.php" method="POST">
                                <input type="hidden" name="wheel_cover" value="lambo">
                                <input type="image" src="https://elegantautoretail.com/cdn/shop/files/003_71bdb50b-d3a4-4d7b-8fe6-72ebd3f4e995_280x315@2x.jpg?v=1690195123" alt="Submit" class="brand__img">
                                <h2 style="margin-left:15%">Wheel Cover</h2>
                            </form>
                        </article>
                    </div>
                    <button class="scroll-arrow right" onclick="scrollRight()">&#8250;</button>
                </div>
            </div>

            <!--==================== FEATURED ====================-->
            <section class="featured section" id="featured">
                <h2 class="section__title">Featured Luxury Cars</h2>
                <div class="featured__container container">
                    <ul class="featured__filters">
                        <li>
                            <button class="featured__item active-featured" data-filter="all">
                                <span>All</span>
                            </button>
                        </li>
                        <li>
                            <button class="featured__item" data-filter=".tesla">
                                <img src="assets/img/logo3.png" alt="">

                            </button>
                        </li>
                        <li>
                            <button class="featured__item" data-filter=".audi">
                                <img src="assets/img/logo2.png" alt="">
                            </button>
                        </li>
                        <li>
                            <button class="featured__item" data-filter=".porsche">
                                <img src="assets/img/logo1.png" alt="">
                            </button>
                        </li>
                        <li>
                            <button class="featured__item" data-filter=".lambo">
                                <img src="assets/img/logo4.png" alt="">
                            </button>
                        </li>
                    </ul>

                    <div class="featured__content grid">

                        <article class="featured__card mix tesla">
                            <div class="shape shape__smaller"></div>

                            <h1 class="featured__title">Tesla</h1>
                            <h3 class="featured__subtitle">Model X</h3>
                            <img src="assets/img/featured1.png" alt="" class="featured__img">
                            <h3 class="featured__price">$98,900</h3>
                            <button class="button featured__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>

                        </article>
                        <article class="featured__card mix tesla">
                            <div class="shape shape__smaller"></div>

                            <h1 class="featured__title">Tesla</h1>
                            <h3 class="featured__subtitle">Model 3</h3>
                            <img src="assets/img/featured2.png" alt="" class="featured__img">
                            <h3 class="featured__price">$45,900</h3>
                            <button class="button featured__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>

                        </article>
                        <article class="featured__card mix audi">
                            <div class="shape shape__smaller"></div>

                            <h1 class="featured__title">Audi</h1>
                            <h3 class="featured__subtitle">E-tron</h3>
                            <img src="assets/img/featured3.png" alt="" class="featured__img">
                            <h3 class="featured__price">$175,900</h3>
                            <button class="button featured__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>

                        </article>
                        <article class="featured__card mix porsche">
                            <div class="shape shape__smaller"></div>

                            <h1 class="featured__title">Porsche</h1>
                            <h3 class="featured__subtitle">Boxster 987</h3>
                            <img src="assets/img/featured4.png" alt="" class="featured__img">
                            <h3 class="featured__price">$126,900</h3>
                            <button class="button featured__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>

                        </article>
                        <article class="featured__card mix porsche">
                            <div class="shape shape__smaller"></div>
                            <h1 class="featured__title">Porsche</h1>
                            <h3 class="featured__subtitle">Panamera</h3>
                            <img src="assets/img/featured5.png" alt="" class="featured__img">
                            <h3 class="featured__price">$175,900</h3>
                            <button class="button featured__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>
                        </article>
                        <article class="featured__card mix lambo">
                            <div class="shape shape__smaller"></div>
                            <h1 class="featured__title">Porsche</h1>
                            <h3 class="featured__subtitle">Panamera</h3>
                            <img src="assets/img/featured5.png" alt="" class="featured__img">
                            <h3 class="featured__price">$175,900</h3>
                            <button class="button featured__button">
                                <i class="ri-shopping-bag-2-line"></i>
                            </button>
                        </article>
                    </div>
                </div>
            </section>

            <!--==================== OFFER ====================-->
            <section class="offer section">
                <div class="offer__container container grid">
                    <img src="assets/img/offer-bg.png" alt="" class="offer__bg">
                    <div class="offer__data">
                        <h2 class="section__title offer__title">
                            Do You Want To Host <br> a Car Meet?
                        </h2>
                        <p class="offer__description">
                            Be the first to Host a Car Meet <br>Free for now.
                        </p>
                        <a href="form.php" class="button">Host Now</a>
                    </div>
                    <img src="assets/img/offer.png" alt="" class="offer__img">
                </div>
            </section><br><br>

            <section class="offer section">
                <div class="offer__container container grid">
                    <img src="assets/img/offer-bg.png" alt="" class="offer__bg">
                    <div class="offer__data">
                        <h2 class="section__title offer__title">
                            Do You Want To Participate <br>in a Car Meet?
                        </h2>
                        <p class="offer__description">
                            Be the first to Participate in a Car Meet <br>Free for now.
                        </p>
                        <a href="attendee.php" class="button">Host Now</a>
                    </div>
                    <img src="assets/img/offer.png" alt="" class="offer__img">
                </div>
            </section>

            <!--==================== LOGOS ====================-->
            <section class="logos section">
                <div class="logos__container container grid">
                    <div class="logos__content">
                        <img src="assets/img/logo1.png" alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="assets/img/logo6.png" alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="assets/img/logo5.png" alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="assets/img/logo4.png" alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="assets/img/logo3.png" alt="" class="logos__img">
                    </div>
                    <div class="logos__content">
                        <img src="assets/img/logo2.png" alt="" class="logos__img">
                    </div>
                </div>
            </section>
        </div>
    </div>
    
    <!--==================== FOOTER ====================-->
    <footer class="footer section">
        <div class="shapeX shape__big"></div>
        <div class="shapeX shape__small"></div>

        <div class="footer__container container grid">
            <div class="footer__content">
                <a href="PistonCult_home.php" class="footer__logo">
                    <img src="assets/img/logo.jpg" width="60px" height="60px" style="border-radius:10px;">
                    Piston Cult
                </a>
                <p class="footer__description">
                    One Stop Hub for all <br>Car Enthusiast.
                </p>
            </div>


            <div class="footer__content">
                <h3 class="footer__title">Company </h3>
                <ul class="footer__links">
                    <li>
                        <a href="chat.php" class="footer__links">Chat</a>
                    </li>
                    <li class="footer__link__title" style="margin-top:10px">
                        Super cars
                        <a href="#" class="footer__links"></a>
                        <div class="footer__container container grid">
                            <ul style="margin-left:20px;">
                                <form action="car.php" method="POST">
                                    <input type="hidden" name="id1" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>BMW</li></button>
                                </form>
                                <form action="car.php" method="POST">
                                        <input type="hidden" name="id2" value="lambo">
                                        <button type="submit" class="footer__car__link"><li>Buggati</li></button>
                                </form>
                                <form action="car.php" method="POST">
                                    <input type="hidden" name="id3" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Ferrari</li></button>
                                </form>
                                <form action="car.php" method="POST">
                                    <input type="hidden" name="id4" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Lamborgini</li></button>
                                </form>
                            </ul>      
                            <ul>
                                <form action="car.php" method="POST">
                                    <input type="hidden" name="id5" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Mahindra</li></button>
                                </form>
                                <form action="car.php" method="POST">
                                    <input type="hidden" name="id6" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Maruti</li></button>
                                </form>
                                <form action="car.php" method="POST">
                                    <input type="hidden" name="id7" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Mercedes</li></button>
                                </form>
                                <form action="car.php" method="POST">
                                    <input type="hidden" name="id8" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Toyota</li></button>
                                </form>
                            </ul>
                            <ul>
                                <form action="car.php" method="POST">
                                    <input type="hidden" name="id9" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>BMW</li></button>
                                </form>
                                <form action="car.php" method="POST">
                                    <input type="hidden" name="id10" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Buggati</li></button>
                                </form>
                                <form action="car.php" method="POST">
                                    <input type="hidden" name="id11" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Ferrari</li></button>
                                </form>
                                <form action="car.php" method="POST">
                                    <input type="hidden" name="id12" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Lamborgini</li></button>
                                </form>
                            </ul>
                        </div>
                    </li><br>
                    <li class="footer__link__title">
                        Shop<br>
                        <div class="footer__container container grid">
                            <ul style="margin-left:20px;"> 
                                Wheels
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="brakes" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Brakes</li></button>
                                </form>
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="rims" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Rims</li></button>
                                </form>
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="tyres" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Tyres</li></button>
                                </form>
                            </ul>      
                            <ul style="margin-left:20px; margin-top:10px">
                                Powertrain
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="air_filter" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Air Filters</li></button>
                                </form>
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="clutch" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Clutch</li></button> 
                                </form>
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="crankshaft" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Crankshaft</li></button>
                                </form>
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="engine" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Engine</li></button>
                                </form>
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="transmission" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Transmission</li></button>
                                </form>
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="turbo" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Turbos</li></button>
                                </form>
                            </ul>
                            <ul style="margin-left:20px; margin-top:10px">
                                Interior Accessories
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="air_freshner" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Air Freshner</li></button>
                                </form>
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="ambient_light" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Ambient Lights</li></button>
                                </form>
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="floor_mate" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Floor Mats</li></button>
                                </form>
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="seat_cover" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Seat Covers</li></button>
                                </form>
                                <form class="acc" action="shop.php" method="POST">
                                    <input type="hidden" name="wheel_cover" value="lambo">
                                    <button type="submit" class="footer__car__link"><li>Wheel Cover</li></button>
                                </form>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="footer__content">
                <h3 class="footer__title">Contact Us</h3>
                <ul class="footer__links">
                    <li class="total-p"><i class="ri-mail-fill"></i> Email: cultpiston@gmail.com</li>
                    <li class="total-p"><i class="ri-phone-fill"></i> Phone No: +91 8007177098</li>
                </ul>
            </div>    
        </div>

        <span class="footer__copy">
            &#169;piston_cult</a> All rigths
            reserved
            <p id="date"></p>
        </span>

    </footer>
    
    <!--========== SCROLL UP ==========-->
    <a href="" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-s-line"></i>
    </a>
    <!--=============== SCROLL REVEAL - PAGE ANNIMATION ===============-->
    <script src="assets/js/scrollrevealAnimation.min.js"></script>
    <!--=============== SWIPER JS - PRODUCT SLIDER ===============-->
    <script src="/assets/js/swiper-bundle.min.js"></script>
    <!--=============== MIXITUP JS - FILTER PRODUCT ===============-->
    <script src="assets/js/mixitup.min.js"></script>
    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <!--=============== MENU JS ===============-->                      
    <script src="assets/js/menu.js"></script>
</body>
</html>