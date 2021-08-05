<?php 
	session_start();
	
	

	if(isset($_GET['action']) and isset($_GET['id']))
	{
		$id = $_GET['id'];
		$act = $_GET['action'];
		if(isset($_SESSION['cart']))
		{
			if (array_key_exists($id, $_SESSION['cart'])) {
				if($act == 'increase'){
					$_SESSION['cart'][$id]++;
					header("Location: ../cart.php");
					exit();
				}
				if($act == 'decrease'){
					if($_SESSION['cart'][$id]>1){
						$_SESSION['cart'][$id]--;
						header("Location: ../cart.php");
						exit();
					}
					else{
					header("Location: ../cart.php");
					exit();
			}
				}
			}
			else{
				header("Location: ../cart.php");
				exit();
			}
		}
		else
		{
				header("Location: ../cart.php");
				exit();
		}
	}
	else
		{
			header("Location: ../cart.php");
			exit();
		}