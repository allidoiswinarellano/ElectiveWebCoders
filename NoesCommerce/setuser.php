<?php
// include('db.php');

$db = mysqli_connect("localhost", "root", "", "eshop") or die("Could not connect!");

$id = $_GET['user_id'];
$res = mysqli_query($db, "SELECT admin FROM user_info WHERE user_id=$id");
$one = 1;
$zero = 0;
$result =  mysqli_fetch_array($res);
$admin = $result['admin'];
echo $admin;
switch ($admin) {
 	case '0':$result = mysqli_query($db, "UPDATE user_info SET admin='$one' WHERE user_id=$id");
 		echo $admin;
 		// header(alert($one));
 		break;
 	case '1':$result = mysqli_query($db, "UPDATE user_info SET admin='$zero' WHERE user_id=$id");
 		echo $admin;
 		break;
 	
 	default:
 		# code...
}


header("Location:users.php");
?>
