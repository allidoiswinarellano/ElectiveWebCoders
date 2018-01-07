<?php

$servername = "localhost";//localhost
$username = "root";//id4199565_root
$password = "";//password
$db = "eshop";//id4199565_eshop

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
///////////////////
// edit: sql connection @ ff pages...
// users.php
// transactions.php
// product.php
// purchases.php
// delete_product.php
// delete_user.php
// setuser.php
///////////////////

?>