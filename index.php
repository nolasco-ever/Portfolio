<?php
	include 'header.php';
	//Connect to the database
	require 'includes/dbh.inc.php';
?>

<body>
	<div id="container">
		<div id="skills">
			<h1 class="section-title">Skills</h1>
			<div id="skills-grid">
				<?php
					$sql = "SELECT * FROM Skills";
					$query = mysqli_query($conn, $sql);
					$skills = array();

					if(mysqli_num_rows($query) > 0){
						while($row = mysqli_fetch_assoc($query)){
							$skills[] = $row;
						}
					}

					// display all skills in the database
					foreach($skills as $skill){
						?>
						<h1><?php echo $skill['skill']; ?></h1>
						<?php
					}
				?>
			</div>
		</div>

		<!-- These buttons will be used to filter results and only show projects in the selected category -->
		<div id="navigation-buttons">
			<h2>Filter: </h2>
			<form id="navigation-form" action="index.php#projects-container" method="post" enctype="multipart/form-data">
				<input class="button" type="submit" value="All" name="all">
				<input class="button" type="submit" value="Modeling and Simulation" name="modsim">
				<input class="button" type="submit" value="Web Development" name="webdev">
				<input class="button" type="submit" value="Game Development" name="gamedev">
			</form>
		</div>

		<div id="projects-container">
						<?php
		
							if(isset($_POST['all'])){
						?>
								<h1 class="section-title">All Projects</h1>
						<?php
		
						?>
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
								</div>
								<?php
							}
							else if(isset($_POST['modsim'])){
							?>
									<h1 class="section-title">Modeling and Simulation</h1>
							<?php
		
							?>
									<div class="section-grid">
							<?php
								//Select the rows from the Projects table with category "Modeling and Simulation" and put them in an array
								$sql = "SELECT projectID, title, img1 FROM Projects WHERE category = 'Modeling and Simulation'";
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
							else if(isset($_POST['webdev'])){
								?>
									<h1 class="section-title">Web Development</h1>
								<?php
		
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
							else if(isset($_POST['gamedev'])){
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
	</div>
</body>