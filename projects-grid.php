<?php
	//Connect to the database
	require 'includes/dbh.inc.php';
?>
<<<<<<< Updated upstream
=======

<div id="projects-container">
				<?php
					//Connect to the database
					require 'includes/dbh.inc.php';
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
=======
	
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
						</div>
						<?php
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
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
=======
						?>
							<div class="section-grid">
						<?php
						//Select the rows from the Projects table with category "Web Development" and put them in an array
						$sql = "SELECT projectID, title, img1 FROM Projects WHERE category = 'Web Development'";
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
						</div>
						<?php
					}
					else if(isset($_POST['modsim'])){
						?>
							<h1 class="section-title">Game Development</h1>
						<?php

						?>
								<div class="section-grid">
						<?php
						//Select the rows from the Projects table with category "Game Development" and put them in an array
						$sql = "SELECT projectID, title, img1 FROM Projects WHERE category = 'Game Development'";
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
						</div>
						<?php
					}
				?>
</div>
>>>>>>> Stashed changes
