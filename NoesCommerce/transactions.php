<?php

session_start();
if(($_SESSION["admin"])==0){
	header("location:profile.php");
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

			.navbar-inverse, .table>caption+thead>tr:first-child>td, .table>caption+thead>tr:first-child>th, .table>colgroup+thead>tr:first-child>td, .table>colgroup+thead>tr:first-child>th, .table>thead:first-child>tr:first-child>td, .table>thead:first-child>tr:first-child>th{
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
			<div class="navbar-header" align="center">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only"> navigation toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">
					<img src="product_images/noe.png" height="35px">
				</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo "Hi,".$_SESSION["name"]; ?></a>
					<ul class="dropdown-menu">
						<li><a href="users.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-user"> Users</a></li>
						<li class="divider"></li>
						<li><a href="product.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-shopping-cart"> Products</a></li>
						<li class="divider"></li>
                        <li><a href="transactions.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-file"> Transactions</a></li>
                        <li class="divider"></li>
						<li><a href="logout.php" style="text-decoration:none; color:blue;"><span class="glyphicon glyphicon-warning-sign"> Logout</a></li>
					</ul>
				</li>
				
			</ul>
		</div>
	</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>

	<div class="row" align="center">
		<h1>Transaction list</h1>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="container-fluid">
		<center>
		<div class="container">
		<table class="table table-hover table-bordered" style="background-color: white; text-align: center;">
		<thead>
		<tr style="background-color: rgba(253, 4, 168, 0.3); color: #000;">
			<th>Transaction no.</th>
			<th>Date</th>
			<th>User id</th>
			<th>Amount</th>

		</tr>
		</thead>

		<tbody>
					<?php
					$db = mysqli_connect("localhost", "root", "", "eshop") or die("Could not connect!");
		  
		 			$sql_query="SELECT * FROM transactions";
		 			$result_set=mysqli_query($db, $sql_query);
		 			while($row=mysqli_fetch_array($result_set))
		    		{

		    	 	echo "<tr style=\"background-color: rgba(245, 245, 245, 0.9);\">";
				echo "<td>".$row['transaction_id']."</td>";
				echo "<td>".$row['date']."</td>";
				echo "<td>".$row['user_id']."</td>";
		        echo "<td>".$row['amount']."</td>";
		        echo "</tr>";
			}

				?>
				</tbody>


		</table>


		</div>
		</center>
		</div>

	</div>
</body>
</html>












		








































