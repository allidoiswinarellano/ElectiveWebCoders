<?php

$db = mysqli_connect("localhost", "root", "", "eshop") or die("Could not connect!");

$id = $_GET['product_id'];

$result = mysqli_query($db, "DELETE FROM products WHERE product_id=$id");

header("Location:product.php");
?>
