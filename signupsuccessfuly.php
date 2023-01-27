<?php

$host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "test";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $username = $_POST['username']; 
    $password = $_POST['password']; 
      
    
    $sql = "INSERT INTO users (username, password)
VALUES ('$username', '$password')";

if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
     echo "<script> window.alert('done');    </script>";
    header("Location: done.php");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

    
    
    

?>

