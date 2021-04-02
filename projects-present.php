<!DOCTYPE HTML>
<html>
	<head>
		<title>Project</title>
		<link rel="stylesheet" href="CSS/projects-present-style.css">
	</head>

	<body>
		<?php
			require 'includes/dbh.inc.php';

			if(isset($_POST['goToProject'])){
				$id = $_POST['id'];

				// Select the rows and columns only for the specific project clicked on in the previous page
				$sql = "SELECT title, description, github, website, img1, img2, img3 FROM Projects WHERE projectID = $id";
				$query = mysqli_query($conn, $sql);
				$datas = array();

				if(mysqli_num_rows($query) > 0){
					while($row = mysqli_fetch_assoc($query)){
						$datas[] = $row;
					}
				}

				// Display the project elements
				foreach($datas as $data){
					?>
						<img src="logos/white-2.png" alt="" id="logo">

						<div id="title-head">
							<img src="<?php echo $data['img1']; ?>" alt="" id="head-img">
							<div id="title"><?php echo $data['title']; ?></div>
						</div>
				
						<div id="desc-container">
							<p id="desc"><?php echo $data['description']; ?></p>
				
							<div id="links">
								<a href="<?php echo $data['github']; ?>"><img src="icons/github-logo.png" alt="" id="github"></a>
								<a href="<?php echo $data['website']; ?>"><img src="icons/web-logo.png" alt="" id="website"></a>
							</div>
						</div>
				
						<div id="img-container">
							<img src="<?php echo $data['img1']; ?>" alt="" id="img1">
							<img src="<?php echo $data['img2']; ?>" alt="" id="img2">
							<img src="<?php echo $data['img3']; ?>" alt="" id="img3">
						</div>
					<?php
				}
			}
		?>
	</body	
</html>