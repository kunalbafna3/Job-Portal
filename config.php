<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
  ?>

<!-- if button is submit -->
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone_no'];
    $password = $_POST['password'];

    <!-- inserting data -->
    $sql = INSERT INTO `users`(`Name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number');
    if(mysqli_query(%conn, $sql)){
        echo "done";
    } else{
        echo "nope $sql." .mysqli_error($conn);

    }
}

mysqli_close($conn);
?>