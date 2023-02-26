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
    <style>
      .container {
        margin-top: 50px;
        margin-left: 25%;
        width: 50%;
        margin-right: 25%;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24),
          0 17px 50px 0 rgba(0, 0, 0, 0.2);
      }
      .mini {
        display: grid;
        grid-template-columns: 1fr 2fr 4fr 2fr;
      }

      .aa {
        text-decoration: none;
        color: black;
      }
      .item {
        text-align: center;
        font-size: 20px;
        object-fit: cover;
      }
      .item:hover {
        padding-top: 0px;
        background-color: white;
        cursor: pointer;
      }
      h4 {
        margin: 0px;
      }
      .aa {
        text-align: center;
        font-size: 20px;
        object-fit: cover;
        text-decoration: none;
        color: black;
        padding-top: 35px;
        height: 40px;
      }
      .aa:hover {
        cursor: pointer;
        color: #5fc81e;
      }
      .contt {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr 2fr 1fr 5fr;
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
      .onto {
        position: absolute;
        bottom: 0px;
        left: 0px;
        font-size: 20px;
        color: #5fc81e;
        opacity: 0.9;
        width: 300px;
        background-color: black;
      }
      .linkss {
        position: relative;
        text-decoration: none;
        width: 300px;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24),
          0 17px 50px 0 rgba(0, 0, 0, 0.1);
      }
      h2 {
        margin: 0px;
      }
    </style>
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
        <a class="aa current" href="farmer_leaderboard.php">
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
      <div class="container">
        <div>
          <?php
              $host = "localhost";  
              $user = "root";  
              $password = "";
              $db_name = "organi5"; 
              $counttt = 0;
              $conn = mysqli_connect($host, $user, $password, $db_name);  
              if(mysqli_connect_errno()) {  
                die("Failed to connect with MySQL: ". mysqli_connect_error());  
              }

              $sql = "SELECT * FROM leaderboard order by score desc;";
              $result = $conn->query($sql);

              $prize = 25000;
              $countt = 1;

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                  $sql1 = "SELECT * FROM farmer_login where f_id = '".$row['f_id']."';";
                  $result1 = $conn->query($sql1);
                  if ($result1->num_rows > 0) {
                    // output data of each row
                    while($row1 = $result1->fetch_assoc()) {
                      echo "
                        <div class='mini'>
                          <div></div>
                          <p>".$countt."</p>
                          <p>".$row1['username']."</p>
                          <p id='last'>Rs. ".$prize."/-</p>
                        </div>
                        <hr />
                      ";
                      $prize -= 5000;
                      $countt++;
                    }
                  }
                }
              }
          ?>
        </div>
      </div>
    </main>
  </body>
</html>
          