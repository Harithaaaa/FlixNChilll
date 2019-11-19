<?php

$servername = "localhost";
$user = "root";
$pass = "";
$db = "flixnchill";

$conn = mysqli_connect($servername, $user, $pass, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
$answer=$_POST['answer'];

$sql = "SELECT name FROM users WHERE answer='$answer'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $message="successfully passed security!!";
    	echo "<script type='text/javascript'>alert('$message');
    	window.location='update1.html';
    	</script>";
} else {
	$message="YOU'RE tresspassing!!";
	echo "<script type='text/javascript'>alert('$message');
	window.location='index.html';
	</script>";

}
}
mysqli_close($conn);
?> 
