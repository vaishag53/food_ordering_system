<!DOCTYPE html>
<html>
<head>
	<title>VSV | Sign up</title>
	<link rel="icon" type="image/x-icon" href="IMGS/VSV.png">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/jq.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		require_once("header.php");
	?>
		
	<div class="container signup" style="margin-top: 70px;">
		<div class="row d-flex mb-0 pb-0">
	      	<div class="col-md-12  p-4 px-md-5 pb-md-5">
		       <div class="heading-section  text-center">
		          <h2 class="mb-4">Signup</h2>
		        </div>
				<form  action="include/signup-inc.php" method="post">
			        <div class="row p-0">
				        <div class="col-md-12">
				            <div class="form-group text-center">
				                <label >UserName</label>
								<input  type="text" name="uid" placeholder="Username">
							</div>
						</div>
				        <div class="col-md-12">
				             <div class="form-group text-center">
				               	<label >Email</label>		
								<input type="email" name="eid" placeholder="Email">
							</div>
						</div>
					    <div class="col-md-12">
				         	<div class="form-group text-center">
				               	<label >Password</label>		
								<input type="password" name="pwd" placeholder="Password">
							</div>
						</div>
				        <div class="col-md-12">
				           	<div class="form-group text-center">
				               	<label >Re-type password</label>		
								<input type="password" name="pwd2" placeholder="Re-type your password">
							</div>
						</div>
						<div class="col-md-12 mt-3 mb-0">
		            		<div class="form-group text-center">	
				              	<div class="error">	
				              			<?php
											if(isset($_GET['error']))
											{
												if($_GET['error']=='emptyfields')
												{
													echo '<p>Fill in all the fileds</p>';
												}
												elseif($_GET['error']=='invalidemail')
												{
													echo '<p>Enter a valid email</p>';
												}
												elseif($_GET['error']=='invaliduid')
												{
													echo '<p>user name cannot have special characters</p>';
												}
												elseif($_GET['error']=='passworderror')
												{
													echo "<p>Passwords didn't match</p>";
												}
											}
										?>
				              		</div>				
								<button type="submit" name="signup" class="btn btn-info btn-sm px-2">Signup</button>
							</div>
						</div>	
					</div>		
				</form>
				<div class="col-md-12 text-center pt-2">
						<p >Already have an Account?<br><a  class="mt-0" href="login.php">Login</a></p>
					</div>
			</div>
		</div>
	</div>
	<?php 
	include 'footer.html';
	 ?>	
</body>	 	
</html>