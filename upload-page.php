<!DOCTYPE HTML>
<html>
	<head>
		<title>Upload Project</title>
		<link rel="stylesheet" href="CSS/upload-page-style.css">
	</head>

	<body>
		<form id="upload-form" action="includes/upload-project.php" method="post" enctype="multipart/form-data">
			<input name="title" id="title" type="text" placeholder="Project Title">
			<textarea name="desc" id="description" name="Project-Description" cols="50" rows-"4" placeholder="Project Description"></textarea>
			<input name="git-link" id="github-link" type="text" placeholder="Github Link">
			<input name="web-link" id="web-link" type="text" placeholder="Website Link (if applicable)">
			<input name="img1" id="img1" type="file" name="img1">
			<input name="img2" id="img2" type="file" name="img2">
			<input name="img3" id="img3" type="file" name="img3">
			<h2 id="radio-title">Category:</h2>
			<input type="radio" id="mod-sim" name="category" value="Modeling and Simulation">
			<label id="mod-sim-label" for="Modeling and Simulation">Modeling and Simulation</label>
			<input type="radio" id="web-dev" name="category" value="Web Development">
			<label id="web-dev-label" for="Web Development">Web Development</label>
			<input type="radio" id="game-dev" name="category" value="Game Development">
			<label id="game-dev-label" for="Game Development">Game Development</label>
			<input id="submit-button" type="submit" value="Upload" name="upload">
		</form>

		<form action="includes/upload-skill.php" method="post" enctype="multipart/form-data">
			<input type="text" name="skill" id="skill" placeholder="Enter skill...">
			<input type="submit" name="upload-skill" value="Submit">
		</form>

		<table>
				<tr>
					<th colspan="2"><h2>Projects</h2></th>
				</tr>
				<?php
					require 'includes/dbh.inc.php';

					//Select all the rows from the Projects table and put them in an array
					$sql = "SELECT projectID, title FROM Projects";
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
						<tr>
							<td class="proj-name"><p><?php echo $data['title']; ?></p></td>
							<td class="delete"><form action="includes/delete-project.php" method="post" enctype="multipart/form-data">
								<input name="id" type="text" value = "<?php echo $data['projectID']; ?>" style="display:none">
								<input class="delete-button" type="submit" value="Delete" name="delete">
							</form></td>
						</tr>
						<?php
					}
				?>
			</table>
	</body>		
</html>