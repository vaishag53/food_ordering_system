<?php
	session_start();
	require_once("include/menu-inc.php");
	$tablename=$_GET["tn"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>VSV | Menu</title>
	<link rel="icon" type="image/x-icon" href="IMGS/VSV.png">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/jq.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<body>
	<div id="added" class="modal fade" role="dialog">
	    <div class="modal-dialog modal-dialog-centered modal-sm" role="content">
	        <div class="modal-content">
	            <div class="modal-header">
	                <center><h6 class="modal-title">Item has been added to cart..</h6></center>
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	            </div>
	            <div class="modal-body">
                        <center>
                        	<button type="submit" class="btn btn-sm btn-secondary" data-dismiss="modal">Continue Shopping</button>
                            <a href="cart.php" class="btn btn-sm btn-primary">Go to cart</a>
                        </center>   
	           	</div>
	        </div>
	    </div>
	</div>
	<div id="already" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="content">
			<div class="modal-content">
				<div class="modal-header">
					<center><h6 class="modal-title">Item is already in the cart..</h6></center>
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>	
			</div>
		</div>
	</div>
		<?php 
		if (isset($_GET['add'])){
			if(isset($_SESSION['cart'])){
				#$id=array_column($_SESSION['cart'],"product_id");
				if(array_key_exists($_GET['product_id'],$_SESSION['cart']))
				{
					echo "<script>$('#already').modal({backdrop:true});</script>";
				}
				else
				{
					#$count=count($_SESSION['cart']);
					#$items=array('product_id'=>$_GET['product_id']);
					$_SESSION['cart'][$_GET['product_id']]=1;
					echo "<script>$('#added').modal({backdrop:true});</script>";
				}
			}
			else{
				#$items=array('product_id'=>$_GET['product_id'],'qty'=>1);
				$_SESSION['cart'][$_GET['product_id']]=1;
				echo "<script>$('#added').modal({backdrop:true});</script>";
			}
		}
	?>
	<?php
		require_once("header.php");
	?>
	
	<button onclick="topFunction()" id="myBtn" class="btn btn-sm btn-secondary tooltip-test" title="Go to top">
      <span class="fa fa-arrow-circle-up"></span>
    </button>
    <a href="index.php#menu" id="myBtn1" class="btn btn-sm btn-secondary tooltip-test" title="Back to Categories">
      <span class="fa fa-arrow-left"></span>
    </a>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
          document.getElementById("myBtn").style.display = "block";
         document.getElementById("myBtn1").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
          //document.getElementById("myBtn1").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
        
	<section  class="menu" style="padding-top: 100px;">
		<div class="container">
			<div class="menu-title">
				<h2 class="text-center font-weight-bold"><?php echo $tablename?></h2>
			</div>
			<div class="row">
				<?php
					$res=getData($tablename);
					while($row=mysqli_fetch_assoc($res))
					{
						component($row["product_name"],$row["product_price"],$row["product_img"],$row["product_id"],$tablename);
					}
				?>
			</div>
		</div>
	</section>		

<?php
	include 'footer.html';		
?>
</body>
</body>
</html>

