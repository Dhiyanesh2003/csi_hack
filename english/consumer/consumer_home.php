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
		color: #5fc81e;
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
		font-family: "Pacifico", cursive;
		margin-top: 10px;
		}

		.search {
		height: 50px;
		text-align: center;
		font-size: 25px;
		}

		* {
		font-family: "Poppins", sans-serif;
		}

		.bl {
		color: black;
		font-size: 35px;
		}

		.gr {
		color: #5fc81e;
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
		color: #5fc81e;
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
		color: #5fc81e;
		font-size: 15px;
		text-decoration: bold;
		border-radius: 5px;
		}

		.search-btn:hover {
		cursor: pointer;
		}

		.current {
		cursor: pointer;
		color: #5fc81e;
		}

		.linkss {
		position: relative;
		text-decoration: none;
		width: 300px;
		box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24),
			0 17px 50px 0 rgba(0, 0, 0, 0.1);
		}

		.parallax-img {
		height: 50vh;
		background-image: url("https://images.unsplash.com/photo-1610348725531-843dff563e2c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		}

		.Deals {
		display: grid;
		grid-template-columns: 1fr 1fr 1fr 1fr;
		margin-bottom: 100px;
		}

		.card {
		display: flex;
		flex-direction: column;
		justify-content: space-between;
		width: 80%;
		/* height: 600px; */
		margin: 5% 10%;
		border: rgb(165, 165, 165) 2px solid;
		}

		.img_cont {
		width: 100%;
		height: 80%;
		}

		.img_cont img {
		width: 100%;
		height: 100%;
		}

		.pro_name,
		.pro_price {
		text-align: center;
		font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif !important;
		font-size: x-large;
		}

		.but_cont {
		text-align: center;
		}
		.but_cont button {
		width: 80%;
		font-size: larger;
		margin: 3% 0;
		color: #00e639;
		background-color: black;
		border-radius: 5px;
		}

		.but_cont button:hover {
		cursor: pointer;
		color: black;
		background-color: #00e639;
		border-radius: 5px;
		}

		/* .deal {
		width: 350px;
		height: 300px;
		} */

		.tode {
		font-size: 50px;
		margin-top: 25px;
		margin-bottom: 25px;
		padding: 30px;
		background-color: #5fc81e;
		color: white;
		}

	</style>
</head>

<body>
	<header>
		<div class="contt">
			<div>
				<h1 class="h1"><span class="bl">Far</span><span class="gr">Com</span></h1>
			</div>
			<a class="aa current" href="consumer_home.html">
				<div class="item">
					<h4>Home</h4>
				</div>
			</a>
			<a class="aa" href="consumer_orders.html">
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
	<main>
		<div class="parallax-img"></div>
		<center>
			<h1 class="tode">Today's Deals</h1>
		</center>
		<div class="Deals">
			<?php
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

			$sql = "SELECT * FROM products;";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "
				<div class='card'>
					<div class='img_cont'>
						<img src='https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80' />
					</div>
					<div class='pro_name'>
						<span>".$row['name']."</span>
					</div>
					<div class='pro_price'>
						<span>Only at Rs.".$row['cost']."/Kg</span>
					</div>
					<div class='but_cont'>
						<a class='linkss' href='consumer_product_page.html'>
							<button>Check out the Product</button>
						</a>
					</div>
					<div class='but_cont'>
						<button>Add to Cart</button>
					</div>
				</div>
				";
			}
			}
			?>

			<!-- <div class="card">
				<div class="img_cont">
					<img src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
				</div>
				<div class="pro_name">
					<span>Onions</span>
				</div>
				<div class="pro_price">
					<span>Only at Rs.30/Kg</span>
				</div>
				<div class="but_cont">
					<a class="linkss" href="consumer_product_page.html">
						<button>Check out the Recipe</button>
					</a>
				</div>
				<div class="but_cont">
					<button>Add to Cart</button>
				</div>
			</div> -->

		</div>
		<center>
			<h1 class="tode">Recipe Kits</h1>
		</center>
		<div class="Deals">
			<div class="card">
				<div class="img_cont">
					<img src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
				</div>
				<div class="pro_name">
					<span>Onions</span>
				</div>
				<div class="pro_price">
					<span>Only at Rs.60/Kits</span>
				</div>
				<div class="but_cont">
					<a class="linkss" href="consumer_recipe_kits.html">
						<button>Check out the Kits</button>
					</a>
				</div>
				<div class="but_cont">
					<button>Add to Cart</button>
				</div>
			</div>

			<div class="card">
				<div class="img_cont">
					<img src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
				</div>
				<div class="pro_name">
					<span>Onions</span>
				</div>
				<div class="pro_price">
					<span>Only at Rs.60/Kits</span>
				</div>
				<div class="but_cont">
					<a class="linkss" href="consumer_recipe_kits.html">
						<button>Check out the Kits</button>
					</a>
				</div>
				<div class="but_cont">
					<button>Add to Cart</button>
				</div>
			</div>

			<div class="card">
				<div class="img_cont">
					<img src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
				</div>
				<div class="pro_name">
					<span>Onions</span>
				</div>
				<div class="pro_price">
					<span>Only at Rs.60/Kits</span>
				</div>
				<div class="but_cont">
					<a class="linkss" href="consumer_recipe_kits.html">
						<button>Check out the Kits</button>
					</a>
				</div>
				<div class="but_cont">
					<button>Add to Cart</button>
				</div>
			</div>

			<div class="card">
				<div class="img_cont">
					<img src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
				</div>
				<div class="pro_name">
					<span>Onions</span>
				</div>
				<div class="pro_price">
					<span>Only at Rs.60/Kits</span>
				</div>
				<div class="but_cont">
					<a class="linkss" href="consumer_recipe_kits.html">
						<button>Check out the Kits</button>
					</a>
				</div>
				<div class="but_cont">
					<button>Add to Cart</button>
				</div>
			</div>

			<!-- <div>
				<center>
					<a class="linkss" href="consumer_recipe_kits.html">
						<img class="deal" src="https://images.unsplash.com/photo-1619096252214-ef06c45683e3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8c2FuZHdoaWNofGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" />
						<div class="onto">
							<h2>Sandwitch</h2>
							<h2>Just @ Rs. 250/kit</h2>
						</div>
					</a>
				</center>
			</div>
			-->
		</div>
		<br><br><br><br>

	</main>
</body>

</html>