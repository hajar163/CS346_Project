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
//Store User info in global Session
$_SESSION['username'] = $_POST['username'];
$username = $_SESSION['username'];
   
if($_POST) {
   //Store Data
   $username = mysqli_real_escape_string($conn,$_POST['username']);
   $password = mysqli_real_escape_string($conn,$_POST['password']); 

   if($username == "" ||  $password == ""){
      echo '<script>alert("You did not enter username or password");
      window.location.href="login.html";
      </script>';
      return false;
  }

   //Check if user_name correct or not
   $sql = "SELECT * FROM Users WHERE user_name = '$username' and password = '$password'";

   //Performe  query
   $result = mysqli_query($conn,$sql);
   //Check number of row of these info 
   $count = mysqli_num_rows($result);
   
   // Go to home page,  
   if($count != 0) {

      header("location:welcome.html");
   }else {
      echo '<script> alert("Your username or password incorrect \n Try again ");
      window.location.href="login.html";
      </script>';

   }

   }
