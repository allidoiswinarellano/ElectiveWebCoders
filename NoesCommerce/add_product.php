<?php
session_start();
include('db.php');
if(($_SESSION["admin"])==0){
    header("location:profile.php");
}

if(isset($_POST["submit"])){
    // $imag=$_POST['image'];
    
    $cat=$_POST['category'];
   
    $title=$_POST['title'];
    $price=$_POST['price'];

    $imag=$_POST['image'];
    $key=$_POST['keyword'];

    $query = "INSERT INTO products (product_cat, product_title, product_price, product_keywords) VALUES ('$cat', '$title', '$price', '$key')";

   if(mysqli_query($con,$query)){
       header("Location:product.php");
       echo "<div class='alert alert-success' id='success-alert'>Product saved.</div>";
   }else{
        echo "<div class='alert alert-danger'>Unable to save Product.</div>";
        }

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
		<!-- <script src="main.js"></script> -->
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
			.nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover, .panel-primary{
				background: linear-gradient(#f44336, #e57373) !important;
				color: #000;
			}

		</style>
	</head>
<body style="background-attachment: fixed; background-size: cover;">


<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #fd04a8;">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand" style="color: #fff;"><img src="product_images/noe.png" height="35px"></a>
				    
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				<li><a href="#" style="color: #fff;"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a></li>
			</ul>
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

<div class="container-fluid">
<center>
<div class="container">
<div class="panel panel-danger panel-size-custom" style="width: 900px;">
  <div class="panel-heading" style="background-color:#F14C41;"><h2>Add Product</h2></div>
    <form class="form-horizontal" action="" method="post">
    <div class="panel-body">

        <div class="form-group">
            <label class="control-label col-sm-2">Category: </label>
            <div class="col-sm-10">
            <select style="width:700px; height:40px; font-size:12pt; border-radius:10px" id="category" name="category" required >
            <option value="1">Monitor</option>
            <option value="2">Keyboard</option>
            <option value="3">Mouse</option>
            <option value="4">CPU</option>
            <option value="5">Laptop</option>
            <option value="6">Accessories</option>
            </select>
            </div>
        </div>

        
        <div class="form-group">
            <label class="control-label col-sm-2">Title: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" style="width:700px; height:40px; font-size:12pt; border-radius:10px" id="title" name="title"/>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-sm-2">Price: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" style="width:700px; height:40px; font-size:12pt; border-radius:10px" id="price" name="price" required/>
            </div>
        </div>

        <!-- 

        <div class="form-group">
            <label class="control-label col-sm-2">Image: </label>
            <div class="col-sm-10">
                <input type="file" style="width:700px; height:40px; font-size:12pt;" id="image" name="image" required/>
            </div>
        </div> -->

        <div class="form-group">
            <label class="control-label col-sm-2">Keywords: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" style="width:700px; height:40px; font-size:12pt; border-radius:10px" id="keyword" name="keyword" required/>
            </div>
        </div>

        <br>
        <div class="form group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" name="submit" class="btn btn-lg btn-success"><span class="glyphicon glyphicon-check"></span>&nbsp;Add</button>
            <a href='product.php' class='btn btn-lg btn-danger'><span class="glyphicon glyphicon-remove"></span>&nbsp;Cancel</a>
        </div>
    </div>
    </div>
    </form>
  
  </div>
</div>


</center>
</div>


</body>
</html>