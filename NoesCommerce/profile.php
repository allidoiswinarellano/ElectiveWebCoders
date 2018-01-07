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
			@media screen and (max-width:480px){
				#search{width:80%;}
				#search_btn{width:30%;float:right;margin-top:-32px;margin-right:10px;}
			}

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
			.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover{
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
					<li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search"></li>
					<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
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
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>

	<div class="row" align="center" id="welcome-modal">
		<img src="product_images/noe.png" height="200px" width="600px">
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2">
				<div id="get_category">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Categories</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
				<div id="get_brand">
				</div>
				<!--<div class="nav nav-pills nav-stacked">
					<li class="active"><a href="#"><h4>Brand</h4></a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
					<li><a href="#">Categories</a></li>
				</div> -->
			</div>
			<div class="col-md-8">	
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info" id="scroll">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product">
							<!--Here we get product jquery Ajax Request-->
						</div>
						<!--<div class="col-md-4">
							<div class="panel panel-info">
								<div class="panel-heading">Samsung Galaxy</div>
								<div class="panel-body">
									<img src="product_images/images.JPG"/>
								</div>
								<div class="panel-heading">$.500.00
									<button style="float:right;" class="btn btn-danger btn-xs">AddToCart</button>
								</div>
							</div>
						</div> -->
					</div>
					<div class="panel-footer">&copy; 2016</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
</body>
</html>
















































