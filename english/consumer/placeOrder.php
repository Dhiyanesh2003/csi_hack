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
    $count = 1;
} else {
  echo "Error updating record: " . $conn->error;
}

if($count==1){
    $sql = "SELECT * FROM cart where cart_id=".$_POST["cart_id"].";";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $sql1 = "SELECT * FROM products where p_id=".$row['p_id'].";";
        $result1 = $conn->query($sql1);


        if ($result1->num_rows > 0) {
        // output data of each row
        while($row1 = $result1->fetch_assoc()) {
            $sql2 = "UPDATE leaderboard SET score=score+1 WHERE f_id=".$row1['f_id'].";";
            if ($conn->query($sql2) === TRUE) {
                $count++;
            }
        }
        }
    }
    }
}
header("Location: consumer_orders.php");