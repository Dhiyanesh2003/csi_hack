<?php   
	session_start();
    $host = "localhost";  
    $user = "root";  
    $password = "";
    $db_name = "organi5"; 

    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }
    else{
        
        $_SESSION['user_id'] = $_POST['user_id']; 
        $sql = "select * from farmer_login where f_id = '".$_SESSION['user_id']."' and pass = '".$_POST['password']."'"; 
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_assoc($result);  
        $count = mysqli_num_rows($result);
        if($count == 1){  
            header("Location: farmer_home.php");
			exit;
        }  
        else{  
            echo "<script> location.href='../../index.html'; </script>";
			exit;
        }   
    }
?>