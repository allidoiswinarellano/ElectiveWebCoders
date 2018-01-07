 <?php
     $file = $_POST['image'];
     $target_dir = "product_images";

     // echo $target_dir;
     if (!file_exists($target_dir)){
     	mkdir($target_dir);

     	 $target_file = $target_dir ."/". basename($_FILES["file"]["name"]);

    	 move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

    	// echo json_encode($_FILES["file"]); 
    	echo $target_file;
     }
     else{

     	 $target_file = $target_dir ."/". basename($_FILES["file"]["name"]);
         // move_uploaded_file($file, $target_dir);
    	 move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

   		// echo json_encode($_FILES["file"]); 
    	echo "success";
}
?>