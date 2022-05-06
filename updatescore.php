
<?php 

session_start(); 

$username = $_SESSION["username"];
//Login to database
$servername = "localhost";
$dbusername = "jeje5";
$dbpassword = "jeje5";
$dbname = "DB1";
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

//check if connected or not
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}


$_COOKIE['playerScore']=$_GET['reaad'];
//$score2=99;

//score value
if ( !empty( $_COOKIE['playerScore'] ) ) { 
	$score2 = $_COOKIE['playerScore'];
    

}
//Get the highest score for the user
$checkscore = "SELECT score FROM Users WHERE user_name = '$username'";
$checkresult = mysqli_query($conn,$checkscore);

//compare the recent score with the score in the database
while ($row = mysqli_fetch_assoc($checkresult)){
    if($score2 > $row['score']){
    $sql = "UPDATE Users SET score = '$score2' WHERE user_name= '$username'";
    if(mysqli_query($conn, $sql)){
     echo " ";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
}
}






//Display users that get highest score to lowest.
$sql = "SELECT user_name, score FROM Users ORDER BY score DESC";
$result = mysqli_query($conn,$sql);

$count = mysqli_num_rows($result);


echo "<h1>Players highest Score</h1>";


if (mysqli_num_rows($result)) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "{$row['user_name']}, with  {$row['score']} Scores<br>";

        
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>highest Score</title>
</head>
<style>


    body{
        
        
        
        margin-top: 3%;
        margin-left: 30%;
        color: black;
        font-size: 30px;
        
    }

    img{

        margin: 0;
        opacity: 0.7;

    }

    h1{
        color:black;
    }

</style>
<body>
    <img src="ball.png" width="600" hight="600" alt="">
</body>
</html>