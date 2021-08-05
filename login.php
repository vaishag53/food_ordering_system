<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>VSV | Login</title>
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
	<div id="success" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="content">
			<div class="modal-content bg-success">
	            <div class="modal-footer" style="color: white; border:0;">
	                <center><h6 class="modal-title">Account created successfully..</h6></center>
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	            </div>
	        </div>
		</div>
	</div>
	<div class="container login" style="margin-top: 70px;">
	    <div class="row d-flex">
	      	<div class="col-md-12  p-4 px-md-5 pb-md-5">
		       <div class="heading-section mb-5 text-center">
		          <h2 class="mb-4">Login</h2>
		        </div>
				<form action="include/login-inc.php" method="post">
					<div class="row">
			            <div class="col-md-12">
			             	<div class="form-group text-center">
			                	<label >UserName</label>
								<input type="text" name="uid" placeholder="Username">
						 	</div>
						</div>
			            <div class="col-md-12">
			           		<div class="form-group text-center">
			               		<label >Password</label> 	
								<input type="password" name="pwd" placeholder="Password">
							</div>
						</div>
						<div class="col-md-12 mt-3">
	              			<div class="form-group text-center">	
			              		<div class="error">	
			              			<?php
			              				if(isset($_GET['signup']))
			              				{
			              					if($_GET['signup']=='success')
			              					{
			              						echo "<script>$('#success').modal({backdrop:true});</script>";
			              					}
			              				}
										if(isset($_GET['error']))
										{
											if($_GET['error']=='emptyfields')
											{
												echo '<p>Fill in all the fileds!</p>';
											}
											elseif($_GET['error']=='wrongpassword')
											{
												echo '<p>Please check your password!</p>';
											}
											elseif($_GET['error']=='nouser')
											{
												echo '<p>No user found!</p>';
											}
											elseif($_GET['error']=='loginfirst')
											{
												echo '<p>Login before adding to cart!</p>';
											}
										}	
									?>	
								</div>	
								<button type="submit" name="login"  class="btn btn-info btn-sm  px-2">Login</button>
							</div>	
						</div>	
					</div>	
				</form>
					<div class="col-md-12 text-center pt-2">
						<p >Don't have an Account?</p>
						<a  class="" href="signup.php">Signup</a>
					</div>
				</div>	
		</div>
	</div>	
	<?php 
	include 'footer.html';
	 ?>
</body>	 
</html>