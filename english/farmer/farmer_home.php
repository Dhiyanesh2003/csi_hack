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

    <script>
      //   let city_ = "";
      //   let country_ = "";
      //   let url = "http://ipinfo.io/json";
      //   const locator = () => {
      //     fetch(url)
      //       .then((res) => res.json())
      //       .then((out) => {
      //         city_ = out.city;
      //         country_ = out.country;
      //         console.log(city_ + ", " + country_);
      //       })
      //       .catch((err) => {
      //         city_ = "Chennai";
      //       });
      //   };
      //   locator;
      //   console.log(city_, country_, "asd");

      window.weatherWidgetConfig = window.weatherWidgetConfig || [];
      window.weatherWidgetConfig.push({
        selector: ".weatherWidget",
        apiKey: "JG3428A3BRXBAEDVAC2ZQB9H9", //Sign up for your personal key
        location: "Chennai", //Enter an address
        unitGroup: "metric", //"us" or "metric"
        forecastDays: 5, //how many days forecast to show
        title: "Chennai, IN", //optional title to show in the
        showTitle: true,
        showConditions: true,
      });

      (function () {
        var d = document,
          s = d.createElement("script");
        s.src =
          "https://www.visualcrossing.com/widgets/forecast-simple/weather-forecast-widget-simple.js";
        s.setAttribute("data-timestamp", +new Date());
        (d.head || d.body).appendChild(s);
      })();
    </script>

    <style>
      .parallax-img {
        height: 70vh;
        background-image: url("https://images.unsplash.com/photo-1610348725531-843dff563e2c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
      .weather {
        margin-top: 50px;
        height: 700px;
        width: 80%;
        justify-content: center;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24),
          0 17px 50px 0 rgba(0, 0, 0, 0.2);
      }
      .weatherWidget {
        margin-top: 30px;
        width: 70%;
      }
      .Deals {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        margin-bottom: 100px;
      }
      .deal {
        width: 300px;
        height: 300px;
      }
      .center-content {
        margin-top: 50px;
        margin-bottom: 50px;
        display: flex;
        justify-content: center;
      }
      .tode {
        font-size: 50px;
        font-family: "Pacifico", cursive;
        margin-top: 25px;
        margin-bottom: 25px;
        padding: 30px;
        background-color: #00e639;
      }
      .linkss {
        text-decoration: none;
      }
      .tode {
        font-size: 50px;
        font-family: "Pacifico", cursive;
        margin-top: 25px;
        margin-bottom: 25px;
        padding: 30px;
        background-color: #00e639;
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
        <a class="aa current" href="farmer_home.html">
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
        <a class="aa" href="farmer_forum.html">
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
      <div class="Deals">
        <div>
          <center>
            <div class="linkss">
              <img
                class="deal"
                src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
              />
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
              <img
                class="deal"
                src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"
              />
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
              <img
                class="deal"
                src="https://images.unsplash.com/photo-1561635741-c416a5193b6e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
              />
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
              <img
                class="deal"
                src="https://images.unsplash.com/photo-1607305387299-a3d9611cd469?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8dG9tYXRvfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
              />
              <div class="onto">
                <h2>Tomatoes</h2>
                <h2>Just @ Rs. 10/kg</h2>
              </div>
            </div>
          </center>
        </div>
      </div>
    </main>
  </body>
</html>
<?php

if (isset($_GET['id']) && $_GET['id'] == 1) {
    echo '<script>
            alert("Product added successfully !!");
          </script>';
}
else if (isset($_GET['id']) && $_GET['id'] == -1) {
  echo '<script>
          alert("Product not added ! \n\nPlease try again later !");
        </script>';
}
?>