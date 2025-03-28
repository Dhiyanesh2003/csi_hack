<?php

session_start();

$c_id = $_SESSION['user_id'];

?>
<html>

<head>
	<title>Farm Com</title>
	<link rel="shortcut icon" href="logo.jpeg" />
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet">
	<style>
		.btn {
			margin-top: 50px;
			margin-bottom: 50px;
			margin-left: 40%;
			width: 20%;
			font-size: 20px;
			width: 200px;
			height: 50px;
			border-radius: 10px;
			color: white;
			background-color: black;
			box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.1);
		}

		.btn:hover {
			color: black;
			background-color: white;
			border: 1px solid;
		}

		.main-container {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
			justify-content: center;
			text-align: center;
			margin-left: 20%;
			margin-top: 50px;
			width: 60%;
			box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.1);
			padding-top: 30px;
			padding-bottom: 10px;
		}

		.imgg {
			width: 125px;
			height: 125px;
		}

		.buy {
			margin-left: 40%;
			width: 20%;
			margin-top: 50px;
			height: 50px;
			font-size: 25px;
			color: #00e639;
			background-color: white;
			border-radius: 25px;
			text-align: center;
			box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.1);
			font-family: 'Pacifico', cursive;
			margin-bottom: 100px;
		}

		.buy:hover {
			background-color: #00e639;
			color: white;
			cursor: pointer;
			box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.1);
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
	</style>
</head>

<body>
	<header>
		<div class="contt">
			<div>
				<h1 class="h1"><span class="bl">Far</span><span class="gr">Com</span></h1>
			</div>
			<a class="aa" href="consumer_home.php">
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
			<a class="aa current" href="consumer_cart.php">
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
	<main>
		<div class="main-container">
			<div>
				<p>Image</p>
				<hr>
			</div>
			<div>
				<p>Details</p>
				<hr>
			</div>
			<div>
				<p>Price</p>
				<hr>
			</div>
			<div>
				<p>Quantity</p>
				<hr>
			</div>
			<div>
				<p>Total
				<p>
					<hr>
			</div>
			<?php
			$host = "localhost";
			$user = "root";
			$password = "";
			$db_name = "organi5";
			$counttt = 0;
			error_reporting(0);
			$conn = mysqli_connect($host, $user, $password, $db_name);
			if (mysqli_connect_errno()) {
				die("Failed to connect with MySQL: " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM cart where c_id = '" . $c_id . "' and status = 1;";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				while ($row = $result->fetch_assoc()) {
					$sql1 = "SELECT * FROM products where p_id = '" . $row['p_id'] . "';";
					$result1 = $conn->query($sql1);
					if ($result1->num_rows > 0) {
						// output data of each row
						while ($row1 = $result1->fetch_assoc()) {

							echo "
										<div>
											<img class='imgg' src='" . $row1['img'] . "' />
										</div>
										<div>
											<p>" . $row1['name'] . "</p>
										</div>
										<div>
											<p>Rs. " . $row1['cost'] . "/kg</p>
										</div>
										<div>
											<p>" . $row['quantity'] . " Kgs.</p>
										</div>
										<div>
											<p>Rs. " . $row1['cost'] . "<p>
										</div>
										<div><br><hr></div>
										<div><br><hr></div>
										<div><br><hr></div>
										<div><br><hr></div>
										<div><br><hr></div>
									";
							$counttt++;
						}
					}
					$cart_id = $row['cart_id'];
				}
			}
			?>

			<!--<div>
					<br><hr><img class="imgg" src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
				</div>
				<div>
					<br><hr><p>Potato</p>
					<p>From Mr.S.Muthu Krishnan</p>
				</div>
				<div>
					<br><hr><p>Rs. 30/kg</p>
				</div>
				<div>
					<br><hr><p>3 Kgs.</p>
				</div>
				<div>
					<br><hr><p>Rs. 90<p>
				</div>-->
			<!-- <div><br><hr><p>Sub-Total: </p></div>
				<div>
					<br><hr><p>Rs. 174</p>
				</div>
				<div></div>
				<div></div>
				<div></div>
				<div><p>Processing Fee</p></div>
				<div>
					<p>Rs. 5</p>
				</div>
				<div><hr></div>
				<div><hr></div>
				<div><hr></div>
				<div><hr><p>Total: </p></div>
				<div>
					<hr><p>Rs. 174</p>
				</div>-->
		</div>
		<form action="placeOrder.php" method="POST">
			<?php
			echo "<input type='text' name='cart_id' value='" . $cart_id . "' hidden/>";
			?>
			<input class="btn" type="submit" value="Place Order !! " />
		</form>
	</main>
</body>

</html>