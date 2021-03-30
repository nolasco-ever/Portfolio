<?php
	require 'dbh.inc.php';	//Connect to the database

	if(isset($_POST['upload'])){
		// Set up variables based on the inputs from the form on upload-page.php
		$title = $_POST['title'];
		$desc = $_POST['desc'];
		$git = $_POST['git-link'];
		$web = $_POST['web-link'];

		$img1_name = $_FILES['img1']['name'];
		$img1_tmp = $_FILES['img1']['tmp_name'];
		$img1_size = $_FILES['img1']['size'];

		$img2_name = $_FILES['img2']['name'];
		$img2_tmp = $_FILES['img2']['tmp_name'];
		$img2_size = $_FILES['img2']['size'];

		$img3_name = $_FILES['img3']['name'];
		$img3_tmp = $_FILES['img3']['tmp_name'];
		$img3_size = $_FILES['img3']['size'];

		$category = $_POST['category'];

		// Variables to hold destination of compressed image
		$img1_comp = compressed($img1_name, $img1_tmp);
		$img2_comp = compressed($img2_name, $img2_tmp);
		$img3_comp = compressed($img3_name, $img3_tmp);

		// Insert values into the SQL Projects table
		$sql = "INSERT INTO Projects(title, description, github, website, img1, img2, img3, category) VALUES (?,?,?,?,?,?,?,?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../upload-page.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "ssssssss", $title, $desc, $git, $web, $img1_comp, $img2_comp, $img3_comp, $category);
			mysqli_stmt_execute($stmt);

			header("Location: ../upload-page.php?upload=success");
			exit();
		}
	}
	else{
		header("Location: ../upload-page.php");
		exit();
	}

	// Function that will gather file info and pass it to compressImage() function
	function compressed($img_name, $img_tmp){
  		// File info 
  		$uploadPath = $_SERVER['DOCUMENT_ROOT'].'/uploads/';
  		$imageUploadPath = $uploadPath.$img_name; 
  		$fileType = pathinfo($imageUploadPath, PATHINFO_EXTENSION);
  		 
  		// Allow certain file formats 
  		$allowTypes = array('jpg','png','jpeg'); 
  		if(in_array($fileType, $allowTypes)){
  		    // Compress size and upload image 
  		    $compressedImage = compressImage($img_tmp, $imageUploadPath, 75); 
  		     
  		    if($compressedImage){ 
  		        $compressedImageSize = filesize($compressedImage);
  		        move_uploaded_file($img_tmp, $compressedImage);
  		        return $compressedImage;	//Return the compressed image destination
  		    }else{ 
  		        $statusMsg = "Image compress failed!"; 
  		    } 
  		}else{ 
  		    $statusMsg = 'Sorry, only JPG, JPEG & PNG files are allowed to upload.'; 
  		}
	}

	// Function that will compress image and return destination
	function compressImage($source, $destination, $quality) { 
	    // Get image info 
	    $imgInfo = getimagesize($source); 
	    $mime = $imgInfo['mime']; 
	     
	    // Create a new image from file 
	    switch($mime){ 
	        case 'image/jpeg': 
	            $image = imagecreatefromjpeg($source); 
	            break; 
	        case 'image/png': 
	            $image = imagecreatefrompng($source); 
	            break; 
	        case 'image/gif': 
	            $image = imagecreatefromgif($source); 
	            break; 
	        default: 
	            $image = imagecreatefromjpeg($source); 
	    } 
	     
	    // Save image 
	    imagejpeg($image, $destination, $quality); 
	     
	    // Return compressed image 
	    return $destination; 
	} 
?>