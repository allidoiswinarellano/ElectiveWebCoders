<?php
include('db.php');
if(($_SESSION["admin"])=='0'){
    header("location:profile.php");
}
session_start();
 
if(isset($_POST['update']))
{     
    $ptitle = $_POST['title'];
    $pprice = $_POST['price']; 


        $query = "UPDATE products SET product_title='$ptitle', product_price='$pprice' WHERE product_id=".$_GET['product_id'];
        $result = mysqli_query($con, $query);
        
        if($result){
        header("Location: product.php");
        }
        
}
?>

<?php

$id=isset($_GET['product_id']) ? $_GET['product_id'] : die('ERROR: Record ID not found.');
$result = mysqli_query($con, "SELECT * FROM products WHERE product_id=$id");
while($res = mysqli_fetch_array($result))
{
    $ptitle = $res['product_title'];
    $pprice = $res['product_price'];
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
<body style="background-image: url(candy.jpg); background-attachment: fixed; background-size: cover;">

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
                <a href="#" class="navbar-brand" style="color: #fff;"><img src= "product_images/noe.png" height="35px"></a>
            </div>
        <div class="collapse navbar-collapse" id="collapse">
            <ul class="nav navbar-nav">
                <li><a href="adminv.php" style="color: #fff;"><span class="glyphicon glyphicon-home" style="color: #fff;"></span>&nbsp;Home</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="add_product.php" style="color: #fff;"><span class="glyphicon glyphicon-plus"></span>&nbsp;Add Product</a>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #fff;"><span class="glyphicon glyphicon-user"></span>&nbsp;</a>
                    <ul class="dropdown-menu" style="background-color: rgba(245, 245, 245, 0.9); color: #fff; width: 200px;">
                        <li><a href="sales.php" style="text-decoration:none; color:black;">Sales</a></li>
                        <li class="divider"></li>
                        <li><a href="product.php" style="text-decoration:none; color:black;">Products</a></li>
                        <li class="divider"></li>
                        <li><a href="user.php" style="text-decoration:none; color:black;">Customers</a></li>
                        <li class="divider"></li>
                        <li><a href="adminlogout.php" style="text-decoration:none; color:black;">Logout</a></li>
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
<div class="panel panel-danger panel-size-custom" style=" width: 800px;">
  <div class="panel-heading" style="background-color: #f05249; color: black"><h2>Edit Product</h2></div>
  <form class="form-horizontal" action="" method="post">
  <div class="panel-body">     
    <div class="form-group">
        <label class="control-label col-sm-2" >Product Title:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="title" placeholder="Product Name" style="width:500px; height:40px; font-size:12pt; border-radius:10px" maxlength="25" value="<?php echo $ptitle;?>">
        </div>
     </div>

     <div class="form-group">
        <label class="control-label col-sm-2" >Product Price:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="price" placeholder="Price" style="width:500px; height:40px; font-size:12pt; border-radius:10px" maxlength="25" value="<?php echo $pprice;?>">
        </div>
     </div>



    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-lg btn-success" id="submit" name="update">Update</button> &nbsp; &nbsp;
            <a href="product.php" type="submit" name="btn-cancel" class="btn btn-lg btn-danger">Cancel</a>
            </div>
    </div>
</form>

</div>
</div>
</center>
</div>
</body>

</html>