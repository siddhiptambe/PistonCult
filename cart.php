<?php
   include 'backend/conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" class="favicon">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/style/home.css">
    <link rel="stylesheet" href="assets/style/cart.css">
    <script src="assets/js/cart.js"></script>
</head> 
<body onload="calculateTotalPrice()">
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
                        <a href="#about" class="nav__link">About</a>
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


    <!--Cart-->
	<div class="cart-container">
		<h2 class="cart_title">🛠️ Your Garage Cart 🏎️</h2>
        <?php 
		$id = $_COOKIE["id"];
		$sel="SELECT * FROM `cart` WHERE ID_CART= $id";
		$run1=mysqli_query($conn,$sel);
		if ($run1->num_rows > 0) 
		{
			while($row1=mysqli_fetch_assoc($run1))
			{ 
?>  
		<table class="card">
			<thead class="card_title">
				<tr>
					<th class="card_data">Product</th>
					<th class="card_data">Price</th>
					<th class="card_data">Quantity</th>
					<th class="card_data">Total</th>
					<th class="card_data">Action</th>
				</tr>
			</thead>
			<tbody>
            
				<tr id="item1" class="cart-item">
					<td class="card_data"><img src="<?php echo $row1['IMAGE'];?>" alt="Product" class="img"> <br><?php echo $row1['NAME']; ?></td>
					<td class="price card_data">₹<?php echo $row1['Price']; ?></td>
					<td class="card_data"><input type="number" class="quantity" value="1" min="1" onchange="updateTotalPrice()"></td>
					<td class="total card_data">₹<?php echo $row1['Price']; ?>.00</td>
					<td class="card_data"><a href="remove_cart.php?id9=<?php echo $row1['c_temp']?>"><button class="remove-btn">Remove</button><a></td>
				</tr>
<?php
			} 
?>
			</tbody>
		</table>

		<div class="cart-summary">
            <h3 class="sub-total">Subtotal: <span class="total-price"></span></h3>
			<button class="checkout-btn" onclick="showTransactionBox()">🏁 Proceed to Checkout</button>
		</div>
	<?php
		}
		else
		{
	?>
			<div>
				<h1 class="cart_title" align="center"><b>YOUR CART IS EMPTY!</b></h1>
				<h3 class="cart_title" align="center">Add items to it Now!</h3><br>
				<a href="PistonCult_home.php"><button class="confirm-btn" style="margin-left:45%"><b>Show Now</b></button></a>
			</div>		
	<?php
		}
	?>
	</div>

    <!--Transaction Overlay-->
	<div id="transaction-box" class="transaction-box">
        <div class="transaction-content">
            <h2 class="transaction-title-1">Transaction Details</h2><hr>

            <h2 class="transaction-title">Mode of Payment</h2>
            <h3 class="transaction-title">Cash on Delivery</h3><hr>

            <h2 class="transaction-title">Total Amount</h2>
            <h3 class="transaction-title"><span class="transaction-total-price"></span></h3><hr>

            <h2 class="transaction-title">Delivery Address</h2>
            <form action="add_order.php?id20=<?php echo isset($id) ? $id : ''; ?>" method="post">
                <input type="text" id="un" name="un" placeholder="Enter your Name here..." required>
                <input type="text" id="phno" name="phno" placeholder="Enter your Phone no here..." required>
                <input type="text" id="address" name="address" placeholder="Enter your Address here..." required>
                <hr>
                <p class="transaction-title">⚠️ You will pay upon receiving the order.</p>
                <button class="confirm-btn" type="submit">Confirm Order</button>
                <button class="cancel-btn" type="button" onclick="closeTransactionBox()">Cancel</button>
            </form>

        </div>
    </div>
<br>
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
    
    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
    <!--=============== MENU JS ===============-->                      
    <script src="assets/js/menu.js"></script>
    <script>
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