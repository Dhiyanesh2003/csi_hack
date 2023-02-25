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

$user = 0;

$sql = "SELECT * FROM forum";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$user = $row["id"];
}
}

$user +=1;

$sql = "SELECT * FROM farmer_login where f_id = '".$user_id."';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$username_e = $row["username"];
}
}

$message = $_POST['message'];
$sql = "INSERT INTO forum VALUES ('" . $user . "','" . $username_e . "','" . $message . "')";
if ($conn->query($sql) === TRUE) {
header("Location: consumer_forum.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>