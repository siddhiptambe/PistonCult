<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Meet Attendee Form</title>
    <link rel="stylesheet" href="assets/style/attendee.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" class="favicon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/style/home.css">
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


    <div class="form-container">
        <h1>Car Meet Attendee Form</h1>
        <form>
            <div class="form-columns">
                <!-- Personal Details -->
                <div class="form-group">
                    <label for="fullname">Full Name:</label>
                    <input type="text" id="fullname" name="fullname" required>
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" pattern="[0-9]*" required>
                </div>
                <div class="form-group">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="phno">Phone Number:</label>
                    <input type="tel" id="phno" name="phno" required>
                </div>
                <div class="form-group">
                    <label for="citystate">City/State:</label>
                    <input type="text" id="citystate" name="citystate" required>
                </div>
                <div class="form-group">
                    <label for="socialmedia">Social Media Account’s Link:</label>
                    <input type="url" id="socialmedia" name="socialmedia" required>
                </div>
                <!-- Event Preferences -->
                <div class="form-group">
                    <label>Have you attended a car meet before?</label>
                    <div class="radio-group">
                        <input type="radio" id="yes1" name="attended" value="yes">
                        <label for="yes1">Yes</label>
                        <input type="radio" id="no1" name="attended" value="no">
                        <label for="no1">No</label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Are you bringing a car to the meet?</label>
                    <div class="radio-group">
                        <input type="radio" id="yes2" name="bringingcar" value="yes">
                        <label for="yes2">Yes</label>
                        <input type="radio" id="no2" name="bringingcar" value="no">
                        <label for="no2">No</label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="preferences">Any specific preferences for the meet?</label>
                    <textarea id="preferences" name="preferences" rows="4" placeholder="e.g., Prefer outdoor parking, interested in photo sessions" disabled></textarea>
                </div>
            </div>
             <!-- Combined Car Details -->
             <div class="form-group">
                <label for="cardetails">Car Details:</label>
                <textarea id="cardetails" name="cardetails" rows="4" placeholder="e.g., 2020 Ford Mustang GT, Electric Blue, Custom exhaust and lowered suspension" disabled></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <p>.</p>
    <script>
       // JavaScript to handle enabling/disabling fields
const bringingCarYes = document.getElementById('yes2');
const bringingCarNo = document.getElementById('no2');
const carDetails = document.getElementById('cardetails');
const preferences = document.getElementById('preferences');

// Add event listeners to radio buttons
bringingCarYes.addEventListener('change', () => {
    carDetails.disabled = false;
    preferences.disabled = false;
});

bringingCarNo.addEventListener('change', () => {
    carDetails.disabled = true;
    preferences.disabled = true;
    carDetails.value = ''; // Clear the field if disabled
    preferences.value = ''; // Clear the field if disabled
});

// Prevent non-numeric input in the age field
const ageInput = document.getElementById('age');
ageInput.addEventListener('input', (event) => {
    // Remove any non-numeric characters
    event.target.value = event.target.value.replace(/[^0-9]/g, '');
});

// Enforce 10-digit phone number
const phoneInput = document.getElementById('phno');
phoneInput.addEventListener('input', (event) => {
    // Remove any non-numeric characters
    event.target.value = event.target.value.replace(/[^0-9]/g, '');

    // Limit input to 10 digits
    if (event.target.value.length > 10) {
        event.target.value = event.target.value.slice(0, 10);
    }
});
    </script>
</body>
</html>