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
			
			.cont{
				padding: 30px;
				margin-top: 50px;
				margin-bottom: 50px;
				margin-left: 10%;
				width: 80%;
				margin-right: 10%;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.1);
			}
			.cont{
				margin-left: 10%;
				width: 80%;
				margin-right: 10%;
			}
			.msg{
				margin-bottom: 100px;
				margin-left: 10%;
				width: 80%;
				height: 70px;
				font-size: 40px;
				margin-right: 10%;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.1);
				display: grid;
				grid-template-columns: 9fr 1fr;
			}
			input{
				text-align: center;
				font-size: 15px;
			}
			.btn{
				background-color: black;
				color: #5FC81E;
				font-size: 20px;
			}
			.btn:hover{
				cursor: pointer;
			}
			.aa{
				padding-top: 10px;
				text-align: center;
				font-size: 20px;
				object-fit: cover;
				text-decoration: none;
				color: black;
			}
			.aa:hover{
				cursor: pointer;
				color: #5FC81E;
			}
			.contt{
				display: grid;
				grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 5fr;
				position: -webkit-sticky;
				position: sticky;
				top: 0;
				width: 100%;
			}
			.h1{
				color: #00e639;
				text-align: center;
				font-size: 30px;
				font-family: 'Pacifico', cursive;
				margin-top: 10px;
			}
			.search{
				height: 50px;
				text-align: center;
				font-size: 25px;
			}
			
			*{
				font-family: 'Poppins', sans-serif;
			}
			.bl{
				color: black;
				font-size: 35px;
			}
			.gr{
				color: #5FC81E;
				font-size: 45px;
			}
			.find{
				height: 40px;
				font-size: 15px;
				width: 300px;
				margin-top: 25px;
				margin-left: 150px;
			}
			.onto{
				position: absolute;
				bottom: 0px;
				left: 0px;
				font-size: 20px;
				color: #5FC81E;
				opacity: 0.9;
				width: 350px;
				background-color: black;
			}
			h2{
				margin: 0px;
			}
			.search-box{
				display: grid;
				grid-template-columns: 3fr 1fr;
				margin-top: 5px;
			}
			.search-btn{
				height: 40px;
				width: 100px;
				margin-top: 25px;
				background-color: black;
				color: #5FC81E;
				font-size: 15px;
				text-decoration: bold;
				border-radius: 5px;
			}
			.search-btn:hover{
				cursor: pointer;
			}
			.current{
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
				<a class="aa current" href="consumer_forum.php">
					<div class="item">
						<h4>Forum</h4>
					</div>
				</a>
				<a class="aa" href="consumer_cart.html">
					<div class="item">
						<h4>Cart</h4>
					</div>
				</a>
				<a class="aa" href="consumer_profile.html">
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
		</header><hr>
			<div class="container"><br>

			<?php

			$sql = "SELECT * FROM forum order by id desc;";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
			echo "
			<div class='cont'>
				<h3>".$row['name']."</h3>
				<hr />
				<p>
				".$row['message']."
				</p>
				<h6></h6>
			</div>
			";
			}
			}
			?>
				<!-- <div class="cont">
					<h3>Mrs. S. Swetha Shri</h3>
					<p>Consumer</p><hr>
					<p>I want to donate something to the farmers who are not in a good position to harvest their crops !<br>What should I do ??</p>
					<h6></h6>
				</div> -->
				
				<br>
			</div>
			<div>
				<form class="msg" action="forum.php" method="POST">
					<input type="text" name="message" placeholder="Type your message here !!" />
					<input class="btn btn-block text-white login-button" type="submit" value="Send" />
				</form>
			</div>
		</main>
	</body>
</html>