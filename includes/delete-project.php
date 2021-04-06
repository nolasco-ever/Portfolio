<?php
	require 'dbh.inc.php';

	if(isset($_POST['delete'])){
		$id = $_POST['id'];

		// Delete the selected project with the matching id
		$sql = 'DELETE FROM Projects WHERE projectID = ?';
		$stmt = mysqli_stmt_init($conn);

		if(!mysqli_stmt_prepare($stmt, $sql)){
			header("Location: ../upload-page.php?error=sqlerror");
			exit();
		}
		else{
			mysqli_stmt_bind_param($stmt, "s", $id);
			mysqli_stmt_execute($stmt);

			header("Location: ../upload-page.php?delete=success");
			exit();
		}
	}
	else{
		header("Location: ../upload-page.php");
		exit();
	}
?>