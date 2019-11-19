<?php

session_start();
$db = mysqli_connect("localhost","root","","flixnchill");
$message="successfully updated password!";
$message1="the two passwords doesnt match !";

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
    $password2 = $_POST['cpassword'];
    $password22 = $_POST['cpassword2'];
    
   
	
	if ($password2==$password22){
        
      

		$sql="UPDATE users SET password='$password2' WHERE username='$username'";
		mysqli_query($db, $sql);
		
		echo "<script type='text/javascript'>alert('$message');
		window.location='aboutus.html';
		</script>";
		
	}
	else
	{
		echo "<script type='text/javascript'>alert('$message1');
		window.location='update.html';
		</script>";
	}
}
?>