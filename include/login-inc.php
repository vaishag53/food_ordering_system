<?php 

if(isset($_POST['login']))
{
	require 'dbc.php';
	$username=$_POST['uid'];
	$password=$_POST['pwd'];
	if(empty($username)||empty($password))
	{
		header("Location: ../login.php?error=emptyfields&uid=".$username);
		exit();
	}
	else
	{
		$sql="SELECT * FROM users WHERE user_name=?";
		$stmt=mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql))
		{	
			header("Location: ../login.php?error=sqlerror");
			exit();
		}
		else
		{
			mysqli_stmt_bind_param($stmt,"s",$username);
			mysqli_stmt_execute($stmt);
			$result=mysqli_stmt_get_result($stmt);
			if($row=mysqli_fetch_assoc($result))
			{
				$password_check=password_verify($password,$row['password']);
				if($password_check==false)
				{
					header("Location: ../login.php?error=wrongpassword");
					exit();
				}
				else if($password_check==true)
				{
					session_start();
					$_SESSION['uid']=$row['user_id'];
					$_SESSION['uname']=$row['user_name'];
					header("Location: ../index.php?login=success");
					exit();

				}
			}
			else
			{
				header("Location: ../login.php?error=nouser");
				exit();
			}
		}
	}
}
else
{
	header("Location: ../index.php");
}