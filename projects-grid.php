<?php
	//Connect to the database
	require 'includes/dbh.inc.php';
?>

<div id="projects-container">
			<h1 class="section-title">[Title]</h1>
			<div class="section-grid">
				<?php
					//Select all the rows from the Projects table and put them in an array
					$sql = "SELECT projectID, title, img1 FROM Projects";
					$query = mysqli_query($conn, $sql);
					$datas = array();

					if(mysqli_num_rows($query) > 0){
						while($row = mysqli_fetch_assoc($query)){
							$datas[] = $row;
						}
					}

					//Loop through the array and display each entry
					foreach($datas as $data){
						?>
						<div class="project">
							<img class="project-img" src="<?php echo $data['img1']; ?>" alt="">
							<form method="post" enctype="multipart/form-data" action="projects-present.php">
								<input name="id" type="text" value = "<?php echo $data['projectID']; ?>" style="display:none">
								<input name="goToProject" type="submit" class="project-title" value="<?php echo $data['title']; ?>">
							</form>
						</div>
						<?php
					}
				?>

				<!-- <div class="project">
					<img class="project-img" src="" alt="">
					<form action=""><input type="submit" class="project-title" value="Title"></form>
				</div>

				<div class="project">
					<img class="project-img" src="" alt="">
					<form action=""><input type="submit" class="project-title" value="Title"></form>
				</div>

				<div class="project">
					<img class="project-img" src="" alt="">
					<form action=""><input type="submit" class="project-title" value="Title"></form>
				</div>

				<div class="project">
					<img class="project-img" src="" alt="">
					<form action=""><input type="submit" class="project-title" value="Title"></form>
				</div>

				<div class="project">
					<img class="project-img" src="" alt="">
					<form action=""><input type="submit" class="project-title" value="Title"></form>
				</div>

				<div class="project">
					<img class="project-img" src="" alt="">
					<form action=""><input type="submit" class="project-title" value="Title"></form>
				</div>

				<div class="project">
					<img class="project-img" src="" alt="">
					<form action=""><input type="submit" class="project-title" value="Title"></form>
				</div>

				<div class="project">
					<img class="project-img" src="" alt="">
					<form action=""><input type="submit" class="project-title" value="Title"></form>
				</div>

				<div class="project">
					<img class="project-img" src="" alt="">
					<form action=""><input type="submit" class="project-title" value="Title"></form>
				</div> -->
			</div>
		</div>