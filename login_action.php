<?php
//Login Action
include_once('config.php');
if(isset($_POST['login_user']))
{
	echo $username = mysqli_real_escape_string($conn,$_POST['user_name']);
	echo "<br/><br/>";
	echo $password = mysqli_real_escape_string($conn,$_POST['password']);
	echo "<br/><br/>";
	echo $password = md5($password); // MD5 Hash
	$Auth_SQL = mysqli_query($conn,"SELECT * from faculty  WHERE user_name = '$username' AND password = '$password'");
	if(mysqli_num_rows($Auth_SQL) ==1)
	{
		while($User_Array = mysqli_fetch_array($Auth_SQL,MYSQLI_ASSOC))
		{
			$Auth = array ();
			$Auth = $User_Array;
			$Auth['auth'] = 'true';
			session_start();
			$_SESSION['auth'] = $Auth;
			header('Location: home.php');
		}
	}
	else
	{
		header('Location: login.php?error=invalid');
	}
}
?>