<html>

<head>
  <title>Farm Com</title>
  <link rel="shortcut icon" href="logo.jpeg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Outfit&display=swap" rel="stylesheet" />

  <script src="farmer_home.js"></script>
  <link rel="stylesheet" href="farmer_home.css" />
</head>

<body>
  <header>
    <div class="contt">
      <div>
        <h1 class="h1">
          <span class="bl">Far</span><span class="gr">Com</span>
        </h1>
      </div>
      <a class="aa current" href="farmer_home.php">
        <div class="item">
          <h4>Home</h4>
        </div>
      </a>
      <a class="aa" href="farmer_orders.php">
        <div class="item">
          <h4>Orders</h4>
        </div>
      </a>
      <a class="aa" href="farmer_sell.html">
        <div class="item">
          <h4>Sell</h4>
        </div>
      </a>
      <a class="aa" href="farmer_forum.php">
        <div class="item">
          <h4>Forum</h4>
        </div>
      </a>
      <a class="aa" href="farmer_leaderboard.php">
        <div class="item">
          <h4>Leaderboard</h4>
        </div>
      </a>
      <a class="aa" href="farmer_profile.php">
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
  <main>
    <div class="parallax-img"></div>
    <center>
      <div class="weatherWidget"></div>
    </center>
    <br />
    <hr />
    <br />
    <div>
      <center>
        <h1 class="tode">Market Price of Veggies today</h1>
      </center>
    </div>

    <!-- ============================ CK's work ==========================-->


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
            <img src='".$row['img']."' />
          </div>
          <div class='pro_name';>
            <span>".$row['name']."</span>
          </div>
          <div class='pro_price'>
            <span>$".$row['cost']."</span>
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
          <span>$3</span>
        </div>
        <div class="but_cont">
          <button>Add to Cart</button>
        </div>
      </div> -->

      




      <!-- ============================ CK's work ==========================-->

      <!-- <div>
        <center>
          <div class="linkss">
            <img class="deal" src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
            <div class="onto">
              <h2>Onions</h2>
              <h2>Just @ Rs. 12/kg</h2>
            </div>
          </div>
        </center>
      </div>
      <div>
        <center>
          <div class="linkss">
            <img class="deal" src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
            <div class="onto">
              <h2>Onions</h2>
              <h2>Just @ Rs. 12/kg</h2>
            </div>
          </div>
        </center>
      </div>
      <div>
        <center>
          <div class="linkss">
            <img class="deal" src="https://images.unsplash.com/photo-1561635741-c416a5193b6e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" />
            <div class="onto">
              <h2>Potatoes</h2>
              <h2>Just @ Rs. 30/kg</h2>
            </div>
          </div>
        </center>
      </div>
      <div>
        <center>
          <div class="linkss">
            <img class="deal" src="https://images.unsplash.com/photo-1607305387299-a3d9611cd469?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dG9tYXRvfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" />
            <div class="onto">
              <h2>Tomatoes</h2>
              <h2>Just @ Rs. 10/kg</h2>
            </div>
          </div>
        </center>
      </div> -->
    </div>
  </main>
</body>

</html>


<?php

if ( isset($_GET['id']) && $_GET['id'] == 1 ){
    echo '<script>alert("Product added successfully")</script>';
}
if ( isset($_GET['id']) && $_GET['id'] == -1 ){
    echo '<script>alert("product not added !! \n\nPlease try again later !!")</script>';
}

?>