<?php

	require 'dbh.inc.php';

	if(isset($_POST['upload-skill'])){
		$skill = $_POST['skill'];

		$sql = "INSERT INTO Skills(skill) VALUES (?)";
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../upload-page.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $skill);
			mysqli_stmt_execute($stmt);

			header("Location: ../upload-page.php?upload=success");
			exit();
		}
	}
?>