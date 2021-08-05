<?php 

if(isset($_POST["signup"]))
{
	require 'dbc.php';
	$username=$_POST['uid'];
	$email=$_POST['eid'];
	$password=$_POST['pwd'];
	$password2=$_POST['pwd2'];

	if(empty($username)||empty($email)||empty($password)||empty($password2))
	{
		header("Location: ../signup.php?error=emptyfields&uid=".$username."&eid=".$email);
		exit();
	}
	elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/", $username))
	{
		header("Location: ../signup.php?error=invalidemail&uid");
		exit();
	}
	else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
	{
		header("Location: ../signup.php?error=invalidemail&uid=".$username);
		exit();
	}
	else if(!preg_match("/^[a-zA-Z0-9]*$/", $username))
	{
		header("Location: ../signup.php?error=invaliduid&eid=".$email);
		exit();
	}
	elseif ($password!==$password2) 
	{
		header("Location: ../signup.php?error=passworderror&uid=".$username."&eid=".$email);
		exit();
	}
	else
	{
		$sql="INSERT INTO users(user_name,email,password) VALUES(?,?,?)";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
		{	
			header("Location: ../signup.php?error=sqlerror");
			exit();
		}
		else
		{
			$encr=password_hash($password, PASSWORD_DEFAULT);
			mysqli_stmt_bind_param($stmt,"sss",$username,$email,$encr);
			mysqli_stmt_execute($stmt);
			header("Location: ../login.php?signup=success");
			exit();
		}
	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);
}
else
{
	header("Location: ../signup.php");
}
