<!DOCTYPE HTML>
<html>
	<head>
		<title>Upload Project</title>
		<link rel="stylesheet" href="CSS/upload-page-style.css">
	</head>

	<body>
		<div>
			<form id="upload-form" action="">
				<input id="title" type="text" placeholder="Project Title">
				<textarea id="description" name="Project-Description" cols="50" rows-"4" placeholder="Project Description"></textarea>
				<input id="github-link" type="text" placeholder="Github Link">
				<input id="web-link" type="text" placeholder="Website Link (if applicable)">
				<input id="img1" type="file" name="img1">
				<input id="img2" type="file" name="img2">
				<input id="img3" type="file" name="img3">

				<h2 id="radio-title">Category:</h2>
				<input type="radio" id="mod-sim" name="category" value="Modeling and Simulation">
				<label id="mod-sim-label" for="Modeling and Simulation">Modeling and Simulation</label>
				<input type="radio" id="web-dev" name="category" value="Web Development">
				<label id="web-dev-label" for="Web Development">Web Development</label>
				<input type="radio" id="game-dev" name="category" value="Game Development">
				<label id="game-dev-label" for="Game Development">Game Development</label>

				<input id="submit-button" type="submit" value="Upload">
			</form>
		</div>
	</body>		
</html>