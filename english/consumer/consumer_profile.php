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
			
			.Details{
				font-size: 25px;
				margin-left: 30%;
				margin-top: 10px;
				width: 40%;
				margin-bottom: 0px;
				display: grid;
				grid-template-columns: 1fr 1fr;
			}
			.det{
				padding: 10px;
				text-align: left;
				margin-top: 20px;
				margin-bottom: 20px;
				margin-left: 50px;
			}
			.btn{
				font-size: 20px;
				width: 200px;
				height: 50px;
				border-radius: 10px;
				color: white;
				background-color: black;
				box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.1);
			}
			.btn:hover{
				color: black;
				background-color: white;
				border: 1px solid;
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
				<a class="aa current" href="consumer_profile.html">
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
		<!-- <main>
			<?php
				// session_start();
				// $host = "localhost";  
				// $user = "root";  
				// $password = "";
				// $db_name = "organi5"; 
				// $con = mysqli_connect($host, $user, $password, $db_name);  
				// if(mysqli_connect_errno()) {  
				// 	die("Failed to connect with MySQL: ". mysqli_connect_error());  
				// }
				// else{
				// 	$user_id = $_SESSION['user_id']; 
				// 	$password = $_SESSION['password'];
				// 	$sql = "select * from loginform where username = '".$user_id."' and pass = '".$password."'";  
				// 	$result = mysqli_query($con, $sql);  
				// 	$row = mysqli_fetch_assoc($result);  
				// 	$count = mysqli_num_rows($result);
				// 	if($count == 1){
				// 		echo "
				// 			<form class='Details'>
				// 				<label class='det'>User Name: </label>
				// 				<input class='det' type='text' value='".$row["username"]."' disabled/>
				// 				<label class='det'>Phone Number: </label>
				// 				<input class='det' type='text' value='".$row["phone"]."' disabled/>
				// 				<label class='det'>E-mail ID: </label>
				// 				<input class='det' type='text' value='".$row["email"]."' disabled/>
				// 				<label class='det'>Shipping Address: </label>
				// 				<input class='det' type='text' value='".$row["address"]."' disabled/><br>
				// 			</form>
				// 		";
				// 	}  
				// 	else{  
				// 		echo "<h1> Login failed. Invalid username or password.</h1>";  
				// 	}   
				// }
				
				
				
				
				
				
			?>
			
			<form action="">
				<center><input class="btn" type="submit" value="Edit" /></center>
			</form>
			<br><hr>
		</main> -->
		<main>
      <!-- <form class="Details">
        <label class="det">User Name: </label>
        <input class="det" type="text" value="Dhiyanesh S" disabled />
        <label class="det">Phone Number: </label>
        <input class="det" type="text" value="7338942092" disabled />
        <label class="det">E-mail ID: </label>
        <input
          class="det"
          type="text"
          value="dhiyanesh7338942092@gmail.com"
          disabled
        />
        <label class="det">Address: </label>
        <input
          class="det"
          type="text"
          value="2/158 Kalaimagal Nagar 2nd Cross Street, Karapakkam, Chennai 97"
          disabled
        /><br />
      </form> -->
      <form class="Button_cont" action="save.php" method="POST">
      <div id="profile_form" class="Details">
        <label class="det">User Name: </label>
        <span id="userName"></span>
        <label class="det">Phone Number: </label>
        <span id="phone"></span>
        <label class="det">E-mail ID: </label>
        <span id="mailId"></span>
        <label class="det">Address: </label>
        <span id="address"></span>
        <br />
      </div>
      
        <center>
          <input
            id="edit_button"
            class="btn"
            type="submit"
            onclick="get_input()"
            value="Edit"
          />
        </center>
      
        <center>
          <input
            id="save_button"
            style="display: none"
            class="btn"
            type="submit"
            onclick="save_input()"
            value="Save"
          />
        </center>
      </form>
      <br />
      <hr />
    </main>
  </body>
  <script>
    console.log("Profile script loaded...");

    // Get user's profile data fom database and assgin to variables here....
    // ..........

    <?php

    $sql = "SELECT * FROM consumer_login where c_id = '".$user_id."'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "
        let userName = '".$row['username']."';
        let phone = '".$row['phone']."';
        let mailId = '".$row['email']."';
        let address = '".$row['address']."';
      ";
    }
    }

    ?>

    console.log("Profile script loade...");

    //loads data into DOM...
    let nameLabel = document.getElementById("userName");
    nameLabel.innerHTML = userName;
    let phoneLabel = document.getElementById("phone");
    phoneLabel.innerHTML = phone;
    let mailLabel = document.getElementById("mailId");
    mailLabel.innerHTML = mailId;
    let addressLabel = document.getElementById("address");
    addressLabel.innerHTML = address;

    const get_input = () => {
      event.preventDefault();
      let Details_cont = document.getElementById("profile_form");
      Details_cont.innerHTML =
        "<label class='det'>User Name: </label><input id='nameField' class='det' type='text' value='" +
        userName +
        "' /><label class='det'>Phone Number: </label><input id='phoneField' class='det' type='text' value='" +
        phone +
        "'  /><label class='det'>E-mail ID: </label><input id='mailField' class='det' type='text' value='" +
        mailId +
        "' /><label class='det'>Address: </label><input id='addressField' class='det' type='text' value='" +
        address +
        "'/><br />";
      let edit_button = document.getElementById("edit_button");
      edit_button.style.display = "none";
      let save_button = document.getElementById("save_button");
      save_button.style.display = "block";
    };

    const save_input = () => {
      event.preventDefault();
      let new_userName = document.getElementById("nameField").value;
      let new_phone = document.getElementById("phoneField").value;
      let new_mailId = document.getElementById("mailField").value;
      let new_address = document.getElementById("addressField").value;

      //   Upload these new values to profile data in database
      //   ..............
      userName = new_userName;
      phone = new_phone;
      mailId = new_mailId;
      address = new_address;

      //   updating the GUI
      let Details_cont = document.getElementById("profile_form");
      Details_cont.innerHTML =
        "<label class='det'>User Name: </label><span id='userName'>" +
        new_userName +
        "</span><label class='det'>Phone Number: </label><span id='phone'>" +
        new_phone +
        "</span><label class='det'>E-mail ID: </label><span id='mailId'>" +
        new_mailId +
        "</span><label class='det'>Address: </label><span id='address'> " +
        new_address +
        "</span><br>";
      let edit_button = document.getElementById("edit_button");
      edit_button.style.display = "block";
      let save_button = document.getElementById("save_button");
      save_button.style.display = "none";
    };

  </script>
</html>