<?php
session_start();

$c_id = $_SESSION['user_id'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organi5";

$score = 0;

if(isset($_POST["rate5"])){
  $score = 5;
}
if(isset($_POST["rate4"])){
  $score = 4;
}
if(isset($_POST["rate3"])){
  $score = 3;
}
if(isset($_POST["rate2"])){
  $score = 2;
}
if(isset($_POST["rate1"])){
  $score = 1;
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM products where p_id = '".$_POST["id"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $idd = $row['f_id'];
  }
} 

$sql = "UPDATE leaderboard SET score=score + ".$score." WHERE f_id = '".$idd."';";

if ($conn->query($sql) === TRUE) {
  $sql1 = "UPDATE cart SET status=3 WHERE p_id = '".$_POST["id"]."' and c_id = '".$c_id."';";

  if ($conn->query($sql1) === TRUE) {
  
    header("Location: consumer_orders.php");
    exit;
} else {
  echo "Error updating record: " . $conn->error;
}
}

$conn->close();
?>