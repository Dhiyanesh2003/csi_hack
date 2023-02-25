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

$user = 0;

$sql = "SELECT * FROM farmer_login";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$user = $row["f_id"];
}
}

$USER_ID = $user+1;
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
$NUMBER = $_POST['NUMBER'];
$EMAIL = $_POST['EMAIL'];
$ADDRESS = $_POST['ADDRESS'];
$sql = "INSERT INTO farmer_login VALUES ('" . $USER_ID . "','" . $USERNAME . "','" . $PASSWORD . "','" . $NUMBER . "','" . $EMAIL . "','" . $ADDRESS . "')";
if ($conn->query($sql) === TRUE) {
header("Location: farmer_login.php");
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>