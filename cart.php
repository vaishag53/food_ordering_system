<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>VSV | CART</title>
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/jq.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body class="bg-light" >
	<div class="modal fade" id="pay" tabindex="-1" role="dialog" >
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Payment</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <form method="post">
	      <div class="modal-body">
	        
	          <div class="form-group">
	            <label for="name" class="col-form-label">Name:</label>
	            <input type="text" class="text-center form-control" placeholder="Enter your name" value=<?php if(isset($_SESSION['uname'])){echo '"'.$_SESSION['uname'].'"';} ?>>
	          </div>
	          <div class="form-group">
	            <label for="add" class="col-form-label">Address:</label>
	            <textarea class="form-control text-center" placeholder="Enter your address" required ></textarea>
	          </div>
	          <div class="form-group">
	            <label for="phone" class="col-form-label">Phone:</label>
	            <input type="text" class="form-control text-center" placeholder="phone no" required>
	          </div>
	          <div class="form-group">
	            <label for="pay" class="col-form-label">Payment:</label>
	            <div class="btn-group btn-group-toggle " data-toggle="buttons">
	                <label class="btn btn-success active" autocomplete="off">
	                	<input type="radio" name="meth" required>COD
	                </label>
	                <label class="btn btn-danger disabled">
	                 	<input type="radio" name="meth" autocomplete="off">Others
	                </label>
	          	</div>
	          	<p class="error offset-md-2">Sorry currently we provide cod only..</p>
	          </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
	         <button type="submit" class="btn btn-primary">Order</button>
	         <input type="hidden" name="done">
	      </div>
	  </form>
	    </div>
	  </div>
</div>
	<div id="removed" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="content">
			<div class="modal-content ">
	            <div class="modal-header">
	                <h6 class="modal-title">Item has been removed..</h6>
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	            </div>
	        </div>
		</div>
	</div>
	<div id="order-success" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="content">
			<div class="modal-content ">
	            <div class="modal-header">
	                <h6 class="modal-title">Order has been placed..</h6>
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	            </div>
	        </div>
		</div>
	</div>
	<?php
		if(isset($_POST['remove']))
		{
			if($_GET['action']=='remove')
			{
				echo "<script>$('#removed').modal({backdrop:true});</script>";
				foreach ($_SESSION['cart'] as $key => $value) {
					if ($key == $_GET['id']){
						unset($_SESSION['cart'][$key]);
					}
				}
			}
		}
		if(isset($_POST['done']))
		{
			echo "<script>$('#order-success').modal({backdrop:true});</script>";
			unset($_SESSION['cart']);
		}
	?>	
	<?php 
		require_once("header.php");
		require_once("include/menu-inc.php");
	?>	
	
	<div class="container-fluid" style="padding-top: 80px;">
		<div class="row px-5 pb-5">
			<div class="col-md-7 col-sm-6">
				<div class="shopping-cart">
					<h6>My Cart</h6>
					<hr>
					<?php 
					 $total = 0;
					 if(isset($_SESSION['cart']))
					 {
					 	if(count($_SESSION['cart'])>0)
						 {
						 	#$product_id=array_column($_SESSION['cart'], 'product_id');
						  	$result=getData1();
						  	while($row=mysqli_fetch_assoc($result))
							{
								foreach($_SESSION['cart'] as $id=>$qty)
								{
									if($row['product_id']==$id)
									{
										$tn=$row['table_name'];
										$res=getItem($tn,$id);
										$r=mysqli_fetch_assoc($res);
										cartElement($r['product_img'],$r['product_name'],$r['product_price'],$r['product_id'],$qty);
										$total = $total + (int)($qty * $r['product_price']);
									}
								}
							}
						}
						else
						{
						 	echo '<center><h5 class="text-danger pt-5">Cart is Empty..</h5></center>';
						}
					}	
				 	else
				 	{
					 	echo '<center><h5 class="text-danger pt-5">Cart is Empty..</h5></center>';
					}
					?>
				</div>
			</div>		
			<div class="col-md-4 col-sm-5 offset-md-1 offset-sm-1 border rounded mt-5 bg-white h-25">
				<div class="pt-4">
					<h6 class="text-center">PRICE DETAILS</h6>
					<hr>
					<div class="price-details text-center">
						<div class="row">
							<div class="col-6">
								<h6>Total Qty</h6>
							</div>
							<div class="col-6">
								<?php 
									if(isset($_SESSION['cart']))
									{
										$count = 0;
										foreach($_SESSION['cart'] as $id=>$qty)
										{
											$count = $count + $qty;
										}
											echo '<h6>'.$count.'</h6>';
									}else{
										echo "<h6>0</h6>";
									}
								 ?>
							</div>	
						</div>
						<div class="row">
							<div class="col-6">
								<h6>Total Price</h6>
							</div>
							<div class="col-6">
								<h6>&#8377;<?php echo "$total";?></h6>
							</div>	
						</div>
						<div class="row">
							<div class="col-6">
								<h6>Delivery charges</h6>
							</div>
							<div class="col-6">
								<h6 class="text-success">FREE</h6>
							</div>	
						</div>
						<hr>
						<div class="row">
							<div class="col-6">
								<h6>Amount Payable</h6>
							</div>
							<div class="col-6">
								<h6>&#8377;<?php echo "$total"; ?></h6>
							</div>	
						</div>
					</div>
					<div class="row">
						<div class=" col-12 py-2 text-center">
							<?php 
								if(isset($_SESSION['uid']))
								{	
									if(isset($_SESSION['cart']))
									{
										$c = count($_SESSION['cart']);
										if( $c > 0){
											echo '<button type="button" class="btn btn-primary" data-toggle="modal" data-backdrop="static" data-target="#pay" >Chekout</button>';
										}
										else{
											echo '<p class="error">Add some items to proceed</p>';
											echo '<button type="button" class="btn btn-primary disabled" data-toggle="modal" data-backdrop="static" data-target="#py" >Chekout</button>';
										}
									}else{
										echo '<p class="error">Add some items to proceed</p>';
										echo '<button type="button" class="btn btn-primary disabled" data-toggle="modal" data-backdrop="static" data-target="#py" >Chekout</button>';
									}
								}
								else
								{
									echo '<p class="error">Please login to proceed</p>';
									echo '<button type="button" class="btn btn-primary disabled" data-toggle="modal" data-backdrop="static" data-target="#py" >Chekout</button>';
								}	
							?>
						</div>	
					</div>		
				</div>
			</div>
			</div>
		</div>
	</div>
<?php
	require_once("footer.html");
?>

</body>	
</body>
</html>
