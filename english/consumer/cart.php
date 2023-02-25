<?php
session_start();

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


$c_id = $_SESSION['user_id'];
$cart_id = 0;
$sql = "SELECT * FROM cart where status = 1 and c_id = '".$c_id."' group by cart_id;";
$result = $conn->query($sql);
echo $sql;
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
$cart_id = $row["cart_id"];
}
}
else{
    $sql = "SELECT * FROM cart where status = 1 group by cart_id;";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $cart_id = $row["cart_id"];
    }
    }
    $cart_id += 1;
}
$p_id = $_POST['id'];
$count = $_POST['count'];
$id = $_POST['id'];
$date = date("d/m/Y");

$sql = "INSERT INTO cart VALUES ('".$cart_id."','".$c_id."','".$p_id."','".$date."','','".$count."','1');";
if ($conn->query($sql) === TRUE) {
header("Location: consumer_cart.php");
exit;
} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}
?>