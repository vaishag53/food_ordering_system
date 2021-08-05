
	<nav class="navbar navbar-expand-lg navbar-dark  main-navbar bg-color fixed-top" id="main-navbar">
		<div class="container">
		  <a class="navbar-brand" href="index.php">VSV Restaurant</a>
		    <div class="collapse navbar-collapse" id="navbar">
			    <ul class="navbar-nav ml-auto">
			      <li class="nav-item ">
			        <a href="index.php" class="nav-link"><i class="fas fa-home"></i> Home</a></li>
			      <li class="nav-item">
			        <a href="index.php#book" class="nav-link"><i class="fas fa-book"></i> Book a Table</a></li>
			      	<?php 
						if(isset($_SESSION['uid']))
						{
							echo ' <li class="nav-item"><a href="include/logout-inc.php" class="nav-link"><i class="fas fa-power"></i>'.$_SESSION['uname'].'(Logout)</a></li>';
						}
						else
						{
							echo ' <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>';
						}
					?>
				</ul>
			</div>				
			<div class="nav-item">
		        <a href="cart.php" class="nav-item nav-link ">
		        	<h5 class="px-3 cart"><i class="fas fa-shopping-cart"></i>
		        		<?php 
		        			if(isset($_SESSION['cart']))
		        			{
		        				$count=count($_SESSION['cart']);
		        				echo '<span id="cart_count" class="text-warning 1">'.$count.'</span>';
		        			}
		        			else
		        			{
		        				echo '<span id="cart_count" class="text-warning 2">0</span>';
		        			}
		        		 ?>
		        	</h5>
		        </a>
		    </div>
		    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar">
			<span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>
