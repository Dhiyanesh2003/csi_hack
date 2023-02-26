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

if ($conn->query($sql) === TRUE) {
    header("Location: consumer_orders.php");
    exit;
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>