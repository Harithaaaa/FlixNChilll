<?php

session_start();
$db = mysqli_connect("localhost","root","","flixnchill");
$message="successfully deleted your account!";
$message1="the two passwords doesnt match !";

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
    $password2 = $_POST['cpassword'];
    $password22 = $_POST['cpassword2'];
    
   
	
	if ($password2==$password22){
                
                $sql="DELETE from users where password='$password2'";
		mysqli_query($db, $sql);
                echo "<script type='text/javascript'>alert('$message');
		window.location='index.html';
		</script>";
		
	}
	else
	{
		echo "<script type='text/javascript'>alert('$message1');
		window.location='deactivate.html';
		</script>";
	}
}
?>