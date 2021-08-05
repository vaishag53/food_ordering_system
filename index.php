<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>VSV|Home</title>
	<link rel="icon" type="image/x-icon" href="IMGS/VSV.png">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script src="js/jq.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body >
	<div id="success" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="content">
			<div class="modal-content ">
	            <div class="modal-header" >
	                <h6 class="modal-title">Login successfull..</h6>
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	            </div>
	        </div>
		</div>
	</div>
	<div id="done" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="content">
			<div class="modal-content ">
	            <div class="modal-header" >
	                <h6 class="modal-title">You have been logged out..</h6>
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	            </div>
	        </div>
		</div>
	</div>
	<div id="booked" class="modal fade" role="dialog">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="content">
			<div class="modal-content ">
	            <div class="modal-header" >
	                <h6 class="modal-title">Table booked successfully..</h6>
	                <button type="button" class="close" data-dismiss="modal">&times;</button>
	            </div>
	        </div>
		</div>
	</div>
	<!--Nav-->
	<?php
		require_once("header.php");
	?>
	<!--End of nav-->
	<button onclick="topFunction()" class="tooltip-test btn btn-sm btn-success" id="myBtn" title="Go to top">
      <span class="fa fa-arrow-circle-up"></span>
    </button>
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 30 || document.documentElement.scrollTop > 30) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
	<!--carousel-->

	<div id="myCarousel" class="carousel slide" data-interval="1500" data-ride="carousel" style="margin-top: 70px;">
		    <div class="carousel-inner" role="listbox">
			    <div class="carousel-item active">
			      	<img src="IMGS/slide002.jpg" class="img-fluid" style="width:100%;">
			      	<div class="carousel-caption">
			   		</div>
			    </div>
			    <div class="carousel-item">
			      	<img src="IMGS/slide001.jpg" class="img-fluid" style="width:100%;">
			      	<div class="carousel-caption">
			      	</div>
			    </div>
			    <div class="carousel-item">
			      	<img src="IMGS/slide003.jpg" class="img-fluid" style="width:100%;">
			      	<div class="carousel-caption">
			      	</div>
			    </div>
			</div>
		    <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>
		    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
		      <span class="carousel-control-prev-icon"></span>
		    </a>
		    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
		      <span class="carousel-control-next-icon"></span>
		    </a>
	</div>

	<!--End of carousel-->
	<div class="jumbotron">
	  <div class="container text-center">
	    <h1>Welcome to VSV</h1>      
	  </div>
	</div>
	<!--Menu---->
<section  class="menu" id="menu">
	<div class="container top">
		<div class="menu-title">
			<h2 class="text-center font-weight-bold mb-2">Categories</h2>
		</div>
		<div class="row">
			<!-- Biriyani-->
			<div class="col-md-6 d-flex align-items-stretch">
				<div class="card">
					<div class="card-img">
						<a href=menu.php?tn=biriyani_items><img src="IMGS/BIRIYANI.jpg" alt="saving data"></a>
					</div>
					<div class="card-body">
						<h5 class="card-title">
							<a href="#">Biriyanies</a>
						</h5>
					</div>
				</div>
			</div>
			<!--End of Biriyani-->
			<!-- Chicken-->
			<div class="col-md-6  d-flex align-items-stretch">
				<div class="card">
					<div class="card-img">
						<a href=menu.php?tn=chicken_items><img src="IMGS/CHICKEN.jpg" alt="saving data"></a>
					</div>
					<div class="card-body">
						<h5 class="card-title">
							<a href="#">Chicken Items</a>
						</h5>
					</div>
				</div>
			</div>
			<!--End of Chicken-->
			<!-- Fish-->
			<div class="col-md-6 d-flex align-items-stretch">
				<div class="card">
					<div class="card-img">
						<a href=menu.php?tn=fish_items><img src="IMGS/FISH.jpg" alt="saving data"></a>
					</div>
					<div class="card-body">
						<h5 class="card-title">
							<a href="#">Fish Items</a>
						</h5>
					</div>
				</div>
			</div>
			<!--End of Fish-->
			<!-- Mutton-->
			<div class="col-md-6 d-flex align-items-stretch">
				<div class="card">
					<div class="card-img">
						<a href=menu.php?tn=mutton_items><img src="IMGS/MUTTON.jpg" alt="saving data"></a>
					</div>
					<div class="card-body">
						<h5 class="card-title">
							<a href="#">Mutton Items</a>
						</h5>
					</div>
				</div>
			</div>
			<!--End of Mutton-->
			<!-- Rotis-->
			<div class="col-md-6 d-flex align-items-stretch">
				<div class="card">
					<div class="card-img">
						<a href=menu.php?tn=roti_items><img src="IMGS/ROTIS.jpg" alt="saving data"></a>
					</div>
					<div class="card-body">
						<h5 class="card-title">
							<a href="#">Roti Items</a>
						</h5>
					</div>
				</div>
			</div>
			<!--End of Roti-->
			<!-- Noodles-->
			<div class="col-md-6 d-flex align-items-stretch">
				<div class="card">
					<div class="card-img">
						<a href=menu.php?tn=noodles><img src="IMGS/NOODLES.jpg" alt="saving data"></a>
					</div>
					<div class="card-body">
						<h5 class="card-title">
							<a href="#">Noodles</a>
						</h5>
					</div>
				</div>
			</div>
			<!--End of Noodles-->
			<!-- Ice cream-->
			<div class="col-md-6 d-flex align-items-stretch">
				<div class="card">
					<div class="card-img">
						<a href=menu.php?tn=ice_creams><img src="IMGS/ICE.jpg" alt="saving data"></a>
					</div>
					<div class="card-body">
						<h5 class="card-title">
							<a href="#">Ice Creams</a>
						</h5>
					</div>
				</div>
			</div>
			<!--End of Ice cream-->
			<!-- Juices-->
			<div class="col-md-6 d-flex align-items-stretch">
				<div class="card">
					<div class="card-img">
						<a href=menu.php?tn=juice_items><img src="IMGS/JUICES.jpg" alt="saving data" width="800px"></a>
					</div>
					<div class="card-body">
						<h5 class="card-title">
							<a href="#">Fresh Juices</a>
						</h5>
					</div>
				</div>
			</div>
			<!--End of Juices-->
		</div>
	</div>
</section>
	<!--End of Menu---->
	<!-----Form----->
<section id="book" class="book-section img" >
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-7 makereservation p-4 px-md-5 pb-md-5">
        <div class="heading-section mb-5 text-center">
          <h2 class="mb-4">Book A Table</h2>
        </div>
        <form action="#">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" placeholder="Your Name" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" placeholder="Your Email" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Phone</label>
                <input type="text" class="form-control" placeholder="Phone" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Date</label>
                <input type="text" class="form-control" id="book_date"
                 placeholder="Date" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Time</label>
                <input type="text" class="form-control" id="book_time"
                placeholder="Time" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="">Person</label>
                <div class="select-wrap one-third">
                  <div class="icon">
                  <span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control">
                    <option value="">Person</option>
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-3">
              <div class="form-group text-center">
                <?php 
					if(isset($_SESSION['uid']))
					{
						echo ' <a data-toggle="modal" data-target="#booked" class="btn btn-book">Book a Table</a>';
					}
					else
					{
						echo '<p class="error">Please login to proceed</p>';
						echo ' <a href="#" class="btn  btn-book disabled">Book a Table</a>';
					}	
				?>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
	<!-----Form----->
<?php 
if(isset($_GET['login']))
{
	if($_GET['login']=='success')
	{
		echo "<script>$('#success').modal({backdrop:true});</script>";
	}
	else if($_GET['login']=='new')
	{
		echo "<script>$('#done').modal({backdrop:true});</script>";
	}
}
include 'footer.html';	
 ?>
 <script>
 	function book(){
 		$('#booked').modal({backdrop:true});
 	}
 </script>

</body>
</html>