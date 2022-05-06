<?php
session_start(); 

//database access data
$servername = "localhost";
$dbusername = "jeje5";
$dbpassword = "jeje5";
$dbname = "DB1";

//creating connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
//check if connected or not
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
//user registration data
$username = mysqli_real_escape_string($conn,$_POST['username2']);
$password =  mysqli_real_escape_string($conn,$_POST['password2']);

if($username == "" ||  $password == ""){
    echo '<script>alert("You did not enter username or password");
    window.location.href="Registration.html";
    </script>';
    return false;
}

//check if the username is duplicated or not
$duplicate_username = "SELECT user_name FROM Users WHERE user_name = '$username'";
$user_result = mysqli_query($conn ,$duplicate_username);//
$user_count = mysqli_num_rows($user_result);

if($user_count > 0){
    echo '<script>alert("username already exist");
    window.location.href="Registration.html";
    </script>';
  return false;
}

//regestring users into database
$sql = "INSERT INTO Users(user_name, password, score)VALUES ('$username','$password', 0)";
//if the registraion is correct the user will be directed to the login page, if not it will display error message 
if ($conn->query($sql) === TRUE) {

    header("location:login.html");
} else {
    echo "error";
}


$conn->close();
