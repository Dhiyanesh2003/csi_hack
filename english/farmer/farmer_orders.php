<?php
session_start();
?>
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

  <link href="../../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <script src="../../bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>

  <style>
    .aa {
      text-decoration: none;
      color: black;
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

    .main-container {
      display: grid;
      grid-template-columns: 2fr 2fr 1fr 1fr 1fr 1fr;
      justify-content: center;
      text-align: center;
      margin-left: 20%;
      margin-top: 50px;
      width: 60%;
      box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24),
        0 17px 50px 0 rgba(0, 0, 0, 0.1);
      padding-top: 30px;
      padding-bottom: 50px;
    }

    .imgg {
      width: 125px;
      height: 125px;
    }

    .track-order {
      text-decoration: none;
      color: blue;
    }

    .track-order:hover {
      color: black;
    }

    .confirmed_but {
      background-color: #5fc81e;
      border-radius: 5px;
    }

    .confirmed_but:hover {
      cursor: pointer;
      background-color: black;
      color: #5fc81e;
      border-radius: 5px;
    }

    #status {
      margin-right: 50px;
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
      <a class="aa current" href="farmer_orders.php">
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
    <div class="main-container">
      <div>
        <p>Image</p>
        <hr />
      </div>
      <div>
        <p>Order Details</p>
        <hr />
      </div>
      <div>
        <p>Price</p>
        <hr />
      </div>
      <div>
        <p>Quantity</p>
        <hr />
      </div>
      <div>
        <p>Total</p>
        <p></p>
        <hr />
      </div>
      <div>
        <p id="status">Confirmation</p>
        <hr />
      </div>

      <?php
      $host = "localhost";
      $user = "root";
      $password = "";
      $db_name = "organi5";
      $counttt = 0;
      $conn = mysqli_connect($host, $user, $password, $db_name);
      if (mysqli_connect_errno()) {
        die("Failed to connect with MySQL: " . mysqli_connect_error());
      }

      $sql = "SELECT * FROM products where f_id = '" . $_SESSION["user_id"] . "';";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          $p_id = $row['p_id'];
          $sql1 = "SELECT * FROM cart where p_id = '" . $p_id . "';";
          $result1 = $conn->query($sql1);

          if ($result1->num_rows > 0) {
            // output data of each row
            while ($row1 = $result1->fetch_assoc()) {
              $total = $row['cost'] * $row['quantity'];
              echo "
                  <div>
                    <img
                      class='imgg'
                      src='" . $row['img'] . "'
                    />
                  </div>
                  <div>
                    <p>" . $row['name'] . "</p>
                  </div>
                  <div>
                    <p>Rs. " . $row['cost'] . "/kg</p>
                  </div>
                  <div>
                    <p>" . $row['quantity'] . " Kgs.</p>
                  </div>
                  <div>
                    <p>Rs. " . $total . "</p>
                    <p></p>
                  </div>
                ";
              if ($row1["status"] == 1) {
                echo "
                    <div id='status'>
                      <p>Confirmed &#9989;</p>
                      <button
                        class='confirmed_but'
                        data-bs-toggle='modal'
                        data-bs-target='#myModal2'
                        onclick='confirmed()'
                      >
                        Proceed
                      </button>
                    </div>
                    <div><br><hr><br></div>
                    <div><br><hr><br></div>
                    <div><br><hr><br></div>
                    <div><br><hr><br></div>
                    <div><br><hr><br></div>
                    <div><br><hr><br></div>
                  ";
              } else {
                echo "
                  <div id='status'>
                    <p>Sent&#9989;</p>
                  </div>
                  ";
              }
            }
          }
        }
      }
      ?>

      <!-- <div>
          <img
            class="imgg"
            src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
          />
        </div>
        <div>
          <p>Onions</p>
          <p>To Mr.S. Ramesh</p>
        </div>
        <div>
          <p>Rs. 12/kg</p>
        </div>
        <div>
          <p>4 Kgs.</p>
        </div>
        <div>
          <p>Rs. 84</p>
          <p></p>
        </div>

        <div id="status">
          <p>Confirmed &#9989;</p>
          <button
            class="confirmed_but"
            data-bs-toggle="modal"
            data-bs-target="#myModal"
          >
            Proceed
          </button>
        </div>
        <div><br><hr><br></div>
        <div><br><hr><br></div>
        <div><br><hr><br></div>
        <div><br><hr><br></div>
        <div><br><hr><br></div>
        <div><br><hr><br></div> -->
      <!-- <div>
          <img
            class="imgg"
            src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
          />
        </div>
        <div>
          <p>Potato</p>
          <p>To Mrs. Swetha</p>
        </div>
        <div>
          <p>Rs. 30/kg</p>
        </div>
        <div>
          <p>3 Kgs.</p>
        </div>
        <div>
          <p>Rs. 90</p>
          <p></p>
        </div>
        <div>
          <p>Sent&#9989;</p>
        </div> -->
    </div>
  </main>

  <!-- <div class="modal" id="myModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Check Delivery Status</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div style="display: flex; justify-content: space-between">
            <p>Available Goods in Stock</p>
            <p style="float: right">100</p>
          </div>
          <div style="display: flex; justify-content: space-between">
            <p>Required Good</p>
            <p style="float: right">-20</p>
          </div>
          <br /><br />

          <hr />
          <div style="display: flex; justify-content: space-between">
            <p>Balance Stock</p>
            <p style="float: right">80</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Cancel
          </button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
            Continue
          </button>
        </div>
      </div>
    </div>
  </div> -->

  <div class="modal" id="myModal2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Confirmation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Confirm Delivery?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Cancel
          </button>
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
            Send
          </button>
        </div>
      </div>
    </div>
  </div>
</body>
<script>
  console.log("orders script loaded");

  // var myModal = document.getElementById("myModal");
  // var myInput = document.getElementById("myInput");

  // myModal.addEventListener("shown.bs.modal", function () {
  //   myInput.focus();
  // });

    const confirmed = () => {
      let status_div = document.getElementById("statuss");
      status_div.innerHTML = "<p>Sent&#9989;</p>";
    }
<script>
</html>