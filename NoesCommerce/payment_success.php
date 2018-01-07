<?php

session_start();
include('db.php');
if(!isset($_SESSION["uid"])){
	header("location:index.php");
}
if(($_SESSION["admin"])==1){
	header("location:users.php");
}

$uid = $_SESSION["uid"];
$total_amt = $_SESSION["amount"];
$res = mysqli_query($con, "SELECT * FROM cart WHERE user_id=$uid");

$sql = "INSERT INTO `transactions`(`user_id`, `amount`, `date`) VALUES ($uid,$total_amt, now())";
$run_query = mysqli_query($con,$sql);
if($run_query){
	$sql = mysqli_query($con, "DELETE FROM `cart` WHERE user_id =$uid");
}else{
    echo "<div class='alert alert-danger'>Error</div>";
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
			table tr td {padding:10px;}
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
			<div class="navbar-header">
				<a href="#" class="navbar-brand">
					<img src="product_images/noe.png" height="35px">
				</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="profile.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
					</ul>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
	
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<div class="panel panel-default">
					<div class="panel-heading"></div>
					<div class="panel-body">
						<h1>Thankyou </h1>
						<hr/>
						<p>Hello <?php echo $_SESSION["name"]; ?>,Your payment process is 
						successfully completed.<b></b><br/>
						You can continue your Shopping <br/></p>
						<a href="index.php" class="btn btn-success btn-lg">Continue Shopping</a>
						<a href="purchases.php" class="btn btn-success btn-lg">See Purchases</a>
					</div>
					<div class="panel-footer"></div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
</body>
</html>
















































