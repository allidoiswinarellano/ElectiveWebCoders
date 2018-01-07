<?php

$db = mysqli_connect("localhost", "root", "", "eshop") or die("Could not connect!");

$id = $_GET['user_id'];

$result = mysqli_query($db, "DELETE FROM user_info WHERE user_id=$id");

header("Location:users.php");
?>
