 <?php
$servername = "localhost";
$user = "root";
$pass = "";
$db = "flixnchill";

$conn = mysqli_connect($servername, $user, $pass, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$password=$_POST['password'];

$sql = "SELECT name FROM users WHERE password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $message="successfully logged in";
    	echo "<script type='text/javascript'>alert('$message');
    	window.location='aboutus.html';
    	</script>";
} else {

	$message="invalid username or password";
	echo "<script type='text/javascript'>alert('$message');
	window.location='login.html';
	</script>";

}

mysqli_close($conn);
?> 
