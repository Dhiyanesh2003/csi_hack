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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link href="../../bootstrap-5.3.0-alpha1-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
  <script src="../../bootstrap-5.3.0-alpha1-dist/js/bootstrap.min.js"></script>
  <style>
    .rate_but {
      padding: 0 5px;
      font-size: large;
      font-weight: bold;
      color: #00e639;
      background-color: black;
      border-radius: 7px;
    }

    .rate_but:hover {
      cursor: pointer;
      color: black;
      background-color: #00e639;
    }

    .main-container {
      display: grid;
      grid-template-columns: 2fr 2fr 1fr 1fr 1fr 1fr 2fr;
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

    /* style rating */

    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");

    .container01 {
      position: relative;
      width: 400px;
      background: #111;
      padding: 20px 30px;
      border: 1px solid #444;
      border-radius: 5px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .container01 .post {
      display: none;
    }

    .container01 .text {
      font-size: 25px;
      color: #666;
      font-weight: 500;
    }

    .container01 .edit {
      position: absolute;
      right: 10px;
      top: 5px;
      font-size: 16px;
      color: #666;
      font-weight: 500;
      cursor: pointer;
    }

    .container01 .edit:hover {
      text-decoration: underline;
    }

    .container01 .star-widget input {
      display: none;
    }

    .star-widget label {
      font-size: 40px;
      color: #444;
      padding: 10px;
      float: right;
      transition: all 0.2s ease;
    }

    input:not(:checked)~label:hover,
    input:not(:checked)~label:hover~label {
      /* color: #fd4; */
      color: #00e639;
    }

    input:checked~label {
      /* color: #fd4; */
      color: #00e639;
    }

    input#rate-5:checked~label {
      /* color: #fe7; */
      color: #00e639;
      text-shadow: 0 0 20px #004d13;
    }

    #rate-1:checked~form header:before {
      content: "I just hate it ";
    }

    #rate-2:checked~form header:before {
      content: "I don't like it ";
    }

    #rate-3:checked~form header:before {
      content: "It is awesome ";
    }

    #rate-4:checked~form header:before {
      content: "I just like it ";
    }

    #rate-5:checked~form header:before {
      content: "I just love it ";
    }

    .container01 form {
      display: none;
    }

    input:checked~form {
      display: block;
    }

    form header {
      width: 100%;
      font-size: 25px;
      /* color: #fe7; */
      color: #00e639;
      font-weight: 500;
      margin: 5px 0 20px 0;
      text-align: center;
      transition: all 0.2s ease;
    }

    form .textarea {
      height: 100px;
      width: 100%;
      overflow: hidden;
    }

    form .textarea textarea {
      height: 100%;
      width: 100%;
      outline: none;
      color: #eee;
      border: 1px solid #333;
      background: #222;
      padding: 10px;
      font-size: 17px;
      resize: none;
    }

    .textarea textarea:focus {
      border-color: #444;
    }

    form .btn {
      height: 45px;
      width: 100%;
      margin: 15px 0;
    }

    form .btn button {
      height: 100%;
      width: 100%;
      border: 1px solid #444;
      outline: none;
      background: #222;
      color: #999;
      font-size: 17px;
      font-weight: 500;
      text-transform: uppercase;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    form .btn button:hover {
      background: #1b1b1b;
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
      <a class="aa" href="consumer_home.php">
        <div class="item">
          <h4>Home</h4>
        </div>
      </a>
      <a class="aa current" href="consumer_orders.html">
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
  </header>
  <hr />
  <main>
    <div class="main-container">
      <div>
        <p>Image</p>
        <hr />
      </div>
      <div>
        <p>Details</p>
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
        <p>Confirmation</p>
        <hr />
      </div>
      <div>
        <p>Get Order On</p>
        <hr />
      </div>
      <div>
        <img class="imgg" src="https://images.unsplash.com/photo-1620574387735-3624d75b2dbc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" />
      </div>
      <div>
        <p>Onions</p>
        <p>From Mr.S.Muthu Kumar</p>
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

      <div>
        <p>Confirmed &#9989;</p>
      </div>
      <div>
        <p>May 20 2030</p>
        <br />
        <a class="track-order" href="#" onclick="rate()"><button class="rate_but" data-bs-toggle="modal" data-bs-target="#myModal">
            Rate
          </button></a>
      </div>
      <div>
        <br />
        <hr />
        <img class="imgg" src="https://images.unsplash.com/photo-1561635741-c416a5193b6e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80" />
      </div>
      <div>
        <br />
        <hr />
        <p>Potato</p>
        <p>From Mr.S.Muthu Krishnan</p>
      </div>
      <div>
        <br />
        <hr />
        <p>Rs. 30/kg</p>
      </div>
      <div>
        <br />
        <hr />
        <p>3 Kgs.</p>
      </div>
      <div>
        <br />
        <hr />
        <p>Rs. 90</p>
        <p></p>
      </div>

      <div>
        <br />
        <hr />
        <p>Received<br />&#9989;</p>
      </div>
      <div>
        <br />
        <hr />
        <p>May 20 2022</p>
        <br />
        <a class="track-order" href="#" onclick="rate()"><button class="rate_but" data-bs-toggle="modal" data-bs-target="#myModal">
            Rate
          </button></a>
      </div>
    </div>
    <!-- rating div -->
  </main>

  <!-- /////////////////////////Popup modal //////////////////-->

  <div class="modal" id="myModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Give your farmer a rating !</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


          <div style="display: flex; justify-content: center">
            <!-- <p>Balance Stock</p>
              <p style="float: right">80</p> -->

            <div class="container01">
              <div class="post">
                <div class="text">Thanks for rating us!</div>
                <div class="edit">EDIT</div>
              </div>
              <div class="star-widget">
                <input type="radio" name="rate" id="rate-5" />
                <label for="rate-5" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-4" />
                <label for="rate-4" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-3" />
                <label for="rate-3" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-2" />
                <label for="rate-2" class="fas fa-star"></label>
                <input type="radio" name="rate" id="rate-1" />
                <label for="rate-1" class="fas fa-star"></label>
                <form action="#">
                  <header></header>
                  <div class="textarea">
                    <textarea cols="30" placeholder="Describe your experience.."></textarea>
                  </div>
                  <div class="btn">
                    <button type="submit" data-bs-dismiss="modal">
                      Post
                    </button>
                  </div>
                </form>
              </div>
            </div>

            <!--  -->
          </div>
        </div>
        <!-- <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cancel
            </button>
            <button type="button" class="btn btn-primary">Continue</button>
          </div> -->
      </div>
    </div>
  </div>
</body>
<script>
  // rating
  const btn = document.querySelector("button");
  const post = document.querySelector(".post");
  const widget = document.querySelector(".star-widget");
  const editBtn = document.querySelector(".edit");
  btn.onclick = () => {
    widget.style.display = "none";
    post.style.display = "block";
    editBtn.onclick = () => {
      widget.style.display = "block";
      post.style.display = "none";
    };
    return false;
  };

  function rate() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>

</html>