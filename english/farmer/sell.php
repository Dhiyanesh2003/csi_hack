<?php
session_start();

$id = $_SESSION["user_id"];

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

$user = 0;

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$user = $row["p_id"];
}
}

$USER_ID = $user+1;
$name = $_POST['name'];
$mfd = $_POST['mfd'];
$exp = $_POST['exp'];
$quantity = $_POST['quantity'];
$cost = $_POST['cost'];
$description = $_POST['description'];
$img = "../../1001_1002.jpg";
// $img = $_POST['img'];
$sql = "INSERT INTO products VALUES ('" . $USER_ID . "','" . $id . "','" . $name . "','" . $mfd . "','" . $exp . 
"','" . $quantity . "','" . $cost . "','" . $description . "','" . $img . "')";
if ($conn->query($sql) === TRUE) {
    header("Location: farmer_home.php?id=1");
} else {
    header("Location: farmer_home.php?id=-1");
}

$conn->close();
?>