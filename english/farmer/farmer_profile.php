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
    <link rel="stylesheet" href="farmer_profile.css" />
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
        <a class="aa" href="farmer_orders.html">
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
        <a class="aa current" href="farmer_profile.php">
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

    $sql = "SELECT * FROM farmer_login where f_id = '".$user_id."'";
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
