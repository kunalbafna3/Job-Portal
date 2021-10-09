<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

// Create connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ".$conn->connect_error);
  }
  echo "";


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone_no'];
    $password = $_POST['password'];

    
    $sql = "INSERT INTO `users`(`Name`, `email`, `password`, `phone_no`) VALUES ('$name','$email','$password','$number')";
    if(mysqli_query($conn, $sql)){
        echo "done";
    } else{
        echo "nope $sql.".mysqli_error($conn);
    }
}

session_start();
if(isset($_POST['Login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("location:index.php");
    } else{
        $error="email or password invalid";
    }
}

if(isset($_POST['job'])){
    $cname = $_POST['cname'];
    $pos = $_POST['pos'];
    $Jdesc = $_POST['Jdesc'];
    $skills = $_POST['skills'];
    $CTC = $_POST['CTC'];

    $sql = "INSERT INTO `jobs`(`cname`, `position`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
    if(mysqli_query($conn, $sql)){
        echo "new job posted";
    } else{
        echo "failed to post $sql.".mysqli_error($conn);
    }
}
mysqli_close($conn);
?>