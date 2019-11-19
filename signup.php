<?php

session_start();
$db = mysqli_connect("localhost","root","","flixnchill");
$message="successfully registered";
$message1="the two passwords doesnt match";

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$password2 = $_POST['cpassword'];
    $email =$_POST['email'];
	$name = $_POST['fullname'];
	$answer=$_POST['answer'];
	
	if ($password==$password2){
        
        

		$sql="INSERT INTO users(username, password, email, name,answer) VALUES('$username', '$password', '$email', '$name','$answer')";
		mysqli_query($db, $sql);
		
		echo "<script type='text/javascript'>alert('$message');
		window.location='login.html';
		</script>";
		
	}
	else
	{
		echo "<script type='text/javascript'>alert('$message1');
		window.location='signup.html';
		</script>";
	}
}
?>