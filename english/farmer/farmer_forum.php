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
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Outfit&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="farmer_forum.css" />
    <!-- <script src="farmer_forum.js"></script> -->
  </head>
  <body>
    <header>
      <div class="contt">
        <div>
          <h1 class="h1">
            <span class="bl">Far</span><span class="gr">Com</span>
          </h1>
        </div>
        <a class="aa" href="farmer_home.php">
          <div class="item">
            <h4>Home</h4>
          </div>
        </a>
        <a class="aa" href="farmers_orders.html">
          <div class="item">
            <h4>Orders</h4>
          </div>
        </a>
        <a class="aa" href="farmer_sell.html">
          <div class="item">
            <h4>Sell</h4>
          </div>
        </a>
        <a class="aa current" href="farmer_forum.html">
          <div class="item">
            <h4>Forum</h4>
          </div>
        </a>
        <a class="aa" href="farmer_leaderboard.html">
          <div class="item">
            <h4>Leaderboard</h4>
          </div>
        </a>
        <a class="aa" href="farmer_profile.html">
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
    <hr />

    <div class="container">
      <br />

      
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
        <hr />
        <p>
          I want to donate something to the farmers who are not in a good
          position to harvest their crops !<br />What should I do ??
        </p>
        <h6></h6>
      </div> -->

      <!-- INSERT INTO `forum` (`id`, `message`) VALUES ('1001', 'I want to donate something to the farmers who are not in a good\r\n          position to harvest their crops !<br />What should I do ??'); -->

      <br />
    </div>
    <div>
      <form class="msg" action="forum.php" method="POST">
        <input type="text" name="message" placeholder="Type your message here !!" />
        <input class="btn btn-block text-white login-button" type="submit" value="Send" />
      </form>
    </div>
  </body>
</html>
