<?php  
	#To print each items in menu
	function component($product_name,$product_price,$product_img,$product_id,$tablename){
		$prod='
				
				<div class="col-md-4 d-flex align-items-stretch">
						<div class="card">
							<div class="card-img ">
								<img src='.$product_img.' alt="'.$product_name.'">
							</div>
							<div class="card-body ">
								<h5 class="card-title">
									<p>'.$product_name.'</p>
									<span class="price">&#8377;'.$product_price.'</span>
								</h5>
								<form action="menu.php" method="get">
									<center><input type="submit" name="add" class=" cart btn btn-success" value="Add to Cart"></center>
									<input type="hidden" name="product_id" value="'.$product_id.'">
									<input type="hidden" name="tn" value="'.$tablename.'">
								</form>
							</div>	
						</div>
				</div>
		';
		echo $prod;
	}	
	#To get menu item details from a table
	function getData($tablename)
	{
		require 'dbc.php';
		$sql="SELECT * FROM ".$tablename.";";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			mysqli_close($conn);
			return $result;
		}
	}

	#To get the table name from db
	function getData1()
	{
		require 'dbc.php';
		$sql = "SELECT * FROM `all`";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			mysqli_close($conn);
			return $result;
		}
	}

	#To get the product details of a cart element
	function getItem($tablename,$product_id)
	{
		require 'dbc.php';
		$sql="SELECT * FROM ".$tablename." WHERE product_id=".$product_id.";";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)==1)
		{
			mysqli_close($conn);
			return $result;
		}
	}
	#To print the cart elements
	function cartElement($product_img,$product_name,$product_price,$product_id,$qty)
	{
		$tot = (int)$product_price * (int)$qty;
		$item='<form action="cart.php?action=remove&id='.$product_id.'" method="post" class="cart-items">
						<div class="border rounded">
							<div class="row bg-white">
								<div class="col-md-3 col-sm-4 pt-5 ">
									<img src='.$product_img.' height=90px width=90px alt="'.$product_name.'" >
								</div>
								<div class="col-md-6 col-sm-6">
									<h5 class="pt-2">'.$product_name.'</h5>
									<h5 class="pt-2">&#8377;'.$product_price.'</h5>
									<h6 class="pt-0" >Qty : '.$qty.'</h6>
									<h6 class="pt-0">Total : &#8377;'.$tot.' </h6>
									<button type="submit" class="btn btn-sm btn-warning my-2" name="remove">Save for later</button>
									<button type="submit" class="btn btn-sm btn-danger mx-2 my-2" name="remove">Remove</button>
								</div>	
								<div class="col-md-3 col-sm-2 py-5">
									<div>
										<a href="include\cart-inc.php?action=increase&id='.$product_id.'" class="btn btn-sm bg-light border plus rounded-circle"><i class="fas fa-plus"></i></a>
										<br><br><a href="include\cart-inc.php?action=decrease&id='.$product_id.'" class="btn btn-sm bg-light border minus  rounded-circle"><i class="fas fa-minus"></i></a>
									</div>
								</div>		
							</div>
						</div>
					</form>';
		echo $item;
	}
	
