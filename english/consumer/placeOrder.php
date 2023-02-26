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

$sql = "UPDATE cart SET status=2 WHERE cart_id=".$_POST["cart_id"].";";
$count = 0;
if ($conn->query($sql) === TRUE) {
    $count++;
} else {
  echo "Error updating record: " . $conn->error;
}

$sql = "SELECT * FROM cart where cart_id=".$_POST["cart_id"].";";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
}