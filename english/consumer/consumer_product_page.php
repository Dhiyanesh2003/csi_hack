<?php
session_start();

$user_id = $_SESSION["user_id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organi5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html>

<head>
	<title>Farm Com</title>
	<link rel="shortcut icon" href="logo.jpeg" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">

	<style>
		html,
		body {
			height: 100%;
			width: 100%;
			font-family: 'Roboto', sans-serif;
		}

		.container {
			max-width: 1200px;
			margin: 0 auto;
			padding: 15px;
			display: flex;
		}

		/* Columns */
		.left-column {
			width: 65%;
			position: relative;
			margin-right: 100px;
			margin-top: 50px;
		}

		.right-column {
			width: 35%;
		}

		/* Left Column */
		.left-column img {
			width: 70%;
			position: absolute;
			left: 0;
			top: 0;
			;
			transition: all 0.3s ease;
		}

		.left-column img.active {
			opacity: 1;
		}

		/* Product Description */
		.product-description {
			border-bottom: 1px solid #E1E8EE;
			margin-bottom: 20px;
		}

		.product-description span {
			font-size: 50px;
			color: #358ED7;
			letter-spacing: 1px;
			font-family: 'Pacifico', cursive;
			text-transform: uppercase;
			text-decoration: none;
		}

		.product-description h1 {
			font-weight: 300;
			font-size: 52px;
			color: #43484D;
			letter-spacing: -2px;
		}

		.product-description p {
			font-size: 16px;
			line-height: 24px;
		}


		/* Product Color */
		.product-color {
			margin-bottom: 30px;
		}

		.color-choose div {
			display: inline-block;
		}

		/* Cable Configuration */
		.cable-choose {
			margin-bottom: 20px;
		}

		.cable-choose button {
			border: 2px solid #E1E8EE;
			border-radius: 6px;
			padding: 13px 20px;
			font-size: 14px;
			color: #5E6977;
			background-color: #fff;
			cursor: pointer;
			transition: all .5s;
		}

		.cable-choose button:hover,
		.cable-choose button:active,
		.cable-choose button:focus {
			border: 2px solid #86939E;
			outline: none;
		}

		.cable-config {
			border-bottom: 1px solid #E1E8EE;
			margin-bottom: 20px;
		}

		.cable-config a {
			color: #358ED7;
			text-decoration: none;
			font-size: 12px;
			position: relative;
			margin: 10px 0;
			display: inline-block;
		}

		.cable-config a:before {
			height: 15px;
			width: 15px;
			border-radius: 50%;
			border: 2px solid rgba(53, 142, 215, 0.5);
			display: inline-block;
			text-align: center;
			line-height: 16px;
			opacity: 0.5;
			margin-right: 5px;
		}

		/* Product Price */
		.cart-btn {
			background-color: black;
			border-radius: 6px;
			font-size: 16px;
			color: #5FC81E;
			text-decoration: none;
			padding: 12px 30px;
		}

		.bottom {
			height: 200px;
		}

		body {
			overflow-x: hidden;
		}

		.aa {
			padding-top: 10px;
			text-align: center;
			font-size: 20px;
			object-fit: cover;
			text-decoration: none;
			color: black;
		}

		.aa:hover {
			cursor: pointer;
			color: #5FC81E;
		}

		.contt {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 5fr;
			position: -webkit-sticky;
			position: sticky;
			top: 0;
			width: 100%;
		}

		.h1 {
			color: #00e639;
			text-align: center;
			font-size: 30px;
			font-family: 'Pacifico', cursive;
			margin-top: 10px;
		}

		.search {
			height: 50px;
			text-align: center;
			font-size: 25px;
		}

		* {
			font-family: 'Poppins', sans-serif;
		}

		.bl {
			color: black;
			font-size: 35px;
		}

		.gr {
			color: #5FC81E;
			font-size: 45px;
		}

		.find {
			height: 40px;
			font-size: 15px;
			width: 300px;
			margin-top: 25px;
			margin-left: 150px;
		}

		.onto {
			position: absolute;
			bottom: 0px;
			left: 0px;
			font-size: 20px;
			color: #5FC81E;
			opacity: 0.9;
			width: 350px;
			background-color: black;
		}

		h2 {
			margin: 0px;
		}

		.search-box {
			display: grid;
			grid-template-columns: 3fr 1fr;
			margin-top: 5px;
		}

		.search-btn {
			height: 40px;
			width: 100px;
			margin-top: 25px;
			background-color: black;
			color: #5FC81E;
			font-size: 15px;
			text-decoration: bold;
			border-radius: 5px;
		}

		.search-btn:hover {
			cursor: pointer;
		}

		.current {
			cursor: pointer;
			color: #5FC81E;
		}

		.contai {
			display: flex;
			justify-content: left;
			margin-bottom: 30px;
		}

		.add {
			background-color: rgb(208, 208, 208);
			height: 50px;
			width: 40px;
			font-size: 20px;
			border: none;
			margin: 5px;
			border-top-right-radius: 5px;
			border-bottom-right-radius: 5px;
		}

		.sub {
			background-color: rgb(208, 208, 208);
			height: 50px;
			width: 40px;
			font-size: 20px;
			border: none;
			margin: 5px;
			border-top-left-radius: 5px;
			border-bottom-left-radius: 5px;
		}

		#submit:hover {
			cursor: pointer;
		}

		#counts {
			margin: 5px;
			font-size: 30px;
		}
	</style>
</head>

<body>
	<header>
		<div class="contt">
			<div>
				<h1 class="h1"><span class="bl">Far</span><span class="gr">Com</span></h1>
			</div>
			<a class="aa current" href="consumer_home.php">
				<div class="item">
					<h4>Home</h4>
				</div>
			</a>
			<a class="aa" href="consumer_orders.php">
				<div class="item">
					<h4>Orders</h4>
				</div>
			</a>
			<a class="aa" href="consumer_offers.html">
				<div class="item">
					<h4>Offers</h4>
				</div>
			</a>
			<a class="aa" href="consumer_forum.php">
				<div class="item">
					<h4>Forum</h4>
				</div>
			</a>
			<a class="aa" href="consumer_cart.php">
				<div class="item">
					<h4>Cart</h4>
				</div>
			</a>
			<a class="aa" href="consumer_profile.php">
				<div class="item">
					<h4>Profile</h4>
				</div>
			</a>
			<div class="search">
				<div class="search-box">
					<input type="text" class="find" placeholder="Search" />
					<button type="button" class="search-btn">Search</button>
				</div>
			</div>
		</div>
	</header>
	<hr>
	<main class="container">
		<?php

		$id = $_POST['id'];
		$sql = "SELECT * FROM products where p_id = '" . $id . "';";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			// output data of each row
			while ($row = $result->fetch_assoc()) {
				echo "
							<!-- Left Column / Headphones Image -->
							<div class='left-column'>
							<img class='' src='" . $row['img'] . "' />
							</div>
						
						
							<!-- Right Column -->
							<div class='right-column'>
							
							<!-- Product Description -->
							<div class='product-description'>
								<h1>" . $row['name'] . "</h1>
								<h3>Health Benefits</h3>
								<p>
									" . $row['description'] . "
								</p>
							</div>
						
							<!-- Product Configuration -->
							<div class='product-configuration'>
						
							<!-- Product Pricing -->
							<div class='product-price'>
								<span><h3>Just @ Rs. " . $row['cost'] . "/kg at We Farm</h3></span>
								<div class='contai'>
								<button class='sub' onclick='sub()'>
									-
								</button>
								<h1 id='counts'>1</h1>
								<button class='add' onclick='add()'>
									+
								</button>
							</div>
								
							</div>
							<form action='cart.php' method='POST'>
							<input type='text' name='id' value='" . $id . "' hidden >
							<input type='text' name='count' id='count' value='1' hidden >
							<input class='btn btn-block text-white login-button cart-btn' id='submit' type='submit' value='Add to cart' />
							</form>
							</div>
						";
			}
		}
		?>
		<!-- Left Column / Headphones Image -->
		<!-- <div class="left-column">
			<img class="" src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
		  </div> -->


		<!-- Right Column -->
		<!-- <div class="right-column">
			
			<form action="cart.php" method="POST"> -->
		<!-- Product Description -->
		<!-- <div class="product-description">
			  <h1>Onions</h1>
			  <h3>Health Benefits</h3>
			  <p>
				<ul>
					<li>28kcal / 120kj</li>
					<li>0.8g protein</li>
					<li>6.4g carbohydrate</li>
					<li>5.0g sugar</li>
					<li>1.8g fibre</li>
					<li>2.0mg Vitamin C</li>
				</ul>
			  </p>
			</div> -->

		<!-- Product Configuration -->
		<!-- <div class="product-configuration"> -->

		<!-- Product Pricing -->
		<!-- <div class="product-price">
			  <span><strike><p>Rs. 40/kg</p></strike></span>
			  <span><h3>Just @ Rs. 12/kg at We Farm</h3></span>
			  <div className="contai">
				<button class="sub" onclick="sub()">
					-
				</button>
				<h1 className="count"></h1>
				<button class="add" onclick="add()">
					+
				</button>
			</div>
				<a href="cart.php" class="cart-btn">Add to cart</a>
			  
			</div>
			<input type="text" name="id" value="1001" disabled hidden>
			</form>
		  </div> -->
	</main>
	<div class="bottom"></div>
</body>
<script>
	function add() {
		var count = document.getElementById("counts").innerHTML;
		count++;
		document.getElementById("counts").innerHTML = count;
		document.getElementById("count").value = count;
	}

	function sub() {
		var count = document.getElementById("counts").innerHTML;
		if (count > 1) {
			count--;
		}
		document.getElementById("counts").innerHTML = count;
		document.getElementById("count").value = count;
	}
</script>

</html>