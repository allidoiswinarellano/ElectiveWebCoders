<?php

session_start();
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
if(($_SESSION["admin"])==1){
	header("location:users.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Noe's Commerce</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<style>
			.navbar-inverse {
				background: red; 
				background: linear-gradient(#f44336, #e57373) !important;
				border-color: white;
			}  
			.navbar-inverse .navbar-nav>li>a{
				color: #000;
			}
			.panel-info>.panel-heading{
				background: linear-gradient(#f44336, #e57373) !important;
				color: #000;
			}
			.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover, .panel-primary>.panel-heading{
				background: linear-gradient(#f44336, #e57373) !important;
				color: #000;
			}

		</style>
	</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top">

		<div class="container-fluid">	
			
			<div class="collapse navbar-collapse" id="collapse">
				<ul class="nav navbar-nav">
					<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
					
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="purchases.php"><span class="glyphicon glyphicon-file"></span> Purchases</a></li>
					<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>Cart <span class="badge">0</span></a></li>
					<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo "Hi,".$_SESSION["name"]; ?></a>
						<ul class="dropdown-menu">
							<li><a href="logout.php" style="text-decoration:none; color:blue;">Logout</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
	<!-- <div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">
					<img src="product_images/noe.png" height="35px">
				</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
			</ul>
		</div>
	</div>
	</div> -->
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	

	<div class="row" align="center" id="welcome-modal">
		<img src="product_images/noe.png" height="200px" width="600px">
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" id="cart_msg">
				<!--Cart Message--> 
			</div>
			<div class="col-md-2"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in ₱</b></div>
						</div>
						<div id="cart_checkout"></div>
						<!--<div class="row">
							<div class="col-md-2">
								<div class="btn-group">
									<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
									<a href="" class="btn btn-primary"><span class="glyphicon glyphicon-ok-sign"></span></a>
								</div>
							</div>
							<div class="col-md-2"><img src='product_images/imges.jpg'></div>
							<div class="col-md-2">Product Name</div>
							<div class="col-md-2"><input type='text' class='form-control' value='1' ></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
							<div class="col-md-2"><input type='text' class='form-control' value='5000' disabled></div>
						</div> -->
						<!--<div class="row">
							<div class="col-md-8"></div>
							<div class="col-md-4">
								<b>Total $500000</b>
							</div> -->
						</div> 
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
			
		</div>
</body>	
</html>
















		